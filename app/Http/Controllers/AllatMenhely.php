<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Allatok;
use App\Models\Fajta;
use App\Models\Foglalt;
use App\Models\Meret;

class AllatMenhely extends Controller
{
    public function Welcome(){
        return view('welcome', [
            'oldallatokk'   =>  Allatok::select('allat.allat_id', 'allat.nev','allat.fajta_id','fajta.fajta_id','fajta.faj','allat.beerkezes_datuma','allat.orokbefogadhato')
                                            ->join('fajta', 'allat.fajta_id','=','fajta.fajta_id')
                                            ->where('fajta.faj','kutya')
                                            ->where('allat.orokbefogadhato', 1)
                                            ->OrderBy('allat.beerkezes_datuma')
                                            ->limit(3)
                                            ->get(),

            'oldallatokc'   =>  Allatok::select('allat.allat_id', 'allat.nev','allat.fajta_id','fajta.fajta_id','fajta.faj','allat.beerkezes_datuma','allat.orokbefogadhato')
                                            ->join('fajta', 'allat.fajta_id','=','fajta.fajta_id')
                                            ->where('fajta.faj','macska')
                                            ->where('allat.orokbefogadhato', 1)
                                            ->OrderBy('allat.beerkezes_datuma')
                                            ->limit(3)
                                            ->get()
        ]);
    }

    public function Allatok(){
        return view('allatok',[
            'allatok'   =>  Allatok::select('allat.allat_id','allat.nev','allat.fajta_id','allat.chip_sorszam','allat.szuldatum','allat.meret_id','allat.szin','allat.ivartalanitott','allat.orokbefogadhato','allat.beerkezes_datuma','allat.megjegyzes','fajta.fajta_id','fajta.faj')
                                    ->join('fajta','allat.fajta_id','fajta.fajta_id')
                                    ->orderBy('allat.allat_id')
                                    ->get()
        ]);
    }

    public function AllatokPost(Request $req){
        $result = " ";

        // Faj keresése
        $selectedanimal = $req->input('kperm');
        $animalfaj = " ";
        if($selectedanimal == "dog"){
            $animalfaj = $animalfaj." AND fajta.fajta_id = 1 OR fajta.fajta_id = 2 OR fajta.fajta_id = 3 OR fajta.fajta_id = 4 OR fajta.fajta_id = 8 ";
        } elseif ($selectedanimal == "cat"){
            $animalfaj = $animalfaj." AND fajta.fajta_id = 5 OR fajta.fajta_id = 6 OR fajta.fajta_id = 7 OR fajta.fajta_id = 9 ";
        } else{
            $animalfaj = " ";
        }

        // Nem keresése
        $selectednem = $req->input('nem');
        $animalnem = " ";
        if($selectednem == "him"){
            $animalnem = $animalnem." AND nem = 1 ";
        } elseif($selectednem == "nosteny"){
            $animalnem = $animalnem." AND nem = 0 ";
        } else{
            $animalnem = " ";
        }

        // Kor keresése
        $selectedkor = $req->input('age');
        $animalkor = " ";
        if($selectedkor == "puppy"){
            $animalkor = $animalkor." AND YEAR(CURRENT_DATE) - year(szuldatum) < 1 ";
        }elseif($selectedkor == "young"){
            $animalkor = $animalkor." AND YEAR(CURRENT_DATE) - year(szuldatum) BETWEEN 1 AND 3 ";
        }elseif($selectedkor == "adult"){
            $animalkor = $animalkor." AND YEAR(CURRENT_DATE) - year(szuldatum) BETWEEN 3 AND 8 ";
        }elseif($selectedkor == "senior"){
            $animalkor = $animalkor." AND YEAR(CURRENT_DATE) - year(szuldatum) > 8 ";
        }else{
            $animalkor = " ";
        }

        // Méret keresése
        $selectedmeret = $req->input('size');
        $animalmeret = " ";
        if($selectedmeret == "small"){
            $animalmeret = $animalmeret." AND meret.meret_id = 1 OR meret.meret_id = 2 ";
        }elseif($selectedmeret == "medium"){
            $animalmeret = $animalmeret." AND meret.meret_id = 3 ";
        }elseif($selectedmeret == "large"){
            $animalmeret = $animalmeret." AND meret.meret_id = 4 OR meret.meret_id = 5 ";
        }else{
            $animalmeret = " ";
        }


        $selectedrendezes = $req->input('sort');
        // Rendezés
        $rendezessql = "";
        if($selectedrendezes == "newest"){
            $rendezessql = " ORDER BY allat.beerkezes_datuma DESC ";
        }
        elseif($selectedrendezes == "oldest"){
            $rendezessql = " ORDER BY allat.beerkezes_datuma ASC ";
        }
        elseif($selectedrendezes == "name-asc"){
            $rendezessql = " Order By allat.nev ASC ";
        }
        elseif($selectedrendezes == "name-desc"){
            $rendezessql = " Order by allat.nev DESC ";
        }
        else{
            $rendezessql = " ";
        }

        // Örökbefogadható
        $selectedorokbe = $req->input('status');
        $animalorok = " ";
        if($selectedorokbe == "adoptable"){
            $animalorok = $animalorok." AND allat.orokbefogadhato = 1 ";
        }
        else if($selectedorokbe == "cannotad"){
            $animalorok = $animalorok." AND allat.orokbefogadhato = 0 ";
        }
        else if($selectedorokbe == "allorok"){
             $animalorok = " ";
        }
        else{
            $animalorok = " ";
        }

        $sql = "SELECT allat.allat_id, allat.fajta_id, allat.nev, allat.meret_id, allat.szin, allat.nem, meret.meret_id, meret.kategoria, fajta.faj
                FROM allat
                Join fajta ON allat.fajta_id = fajta.fajta_id
                Join meret ON allat.meret_id = meret.meret_id
                Where allat.allat_id = allat.allat_id ".$animalfaj.$animalnem.$animalkor.$animalmeret.$animalorok.$rendezessql;

        $result = DB::select($sql);


        return view('allatok', [
            'allatok'   =>  Allatok::select('allat.allat_id','allat.nev','allat.fajta_id','allat.chip_sorszam','allat.szuldatum','allat.meret_id','allat.szin','allat.ivartalanitott','allat.orokbefogadhato','allat.beerkezes_datuma','allat.megjegyzes','fajta.fajta_id','fajta.faj')
                                    ->join('fajta','allat.fajta_id','fajta.fajta_id')
                                    ->orderBy('allat.allat_id')
                                    ->get(),
            "result"            =>  $result
        ]);
    }

    public function AllatData($id){
        return view('allat',[
            'lekertallat'   =>  Allatok::select('allat.allat_id','allat.nev', 'allat.fajta_id','allat.megjegyzes','allat.szuldatum','allat.beerkezes_datuma','fajta.fajta_id','fajta.faj','allat.szin','allat.orokbefogadhato','allat.nem')
                                        ->join('fajta', 'allat.fajta_id','fajta.fajta_id')
                                        ->where('allat.allat_id',$id)
                                        ->first(),
            'merete'        =>  Allatok::select('allat.allat_id','allat.meret_id', 'meret.meret_id','meret.kategoria')
                                        ->join('meret', 'allat.meret_id','meret.meret_id')
                                        ->where('allat.allat_id',$id)
                                        ->get(),
            'fajtaja'       =>  Allatok::select('allat.allat_id', 'allat.fajta_id', 'fajta.fajta_id', 'fajta.pontos_fajta')
                                        ->join('fajta','allat.fajta_id', 'fajta.fajta_id')
                                        ->where('allat.allat_id',$id)
                                        ->get(),
            'foglalte'      =>  Foglalt::select('foglalt.allat_id','foglalt.datum','foglalt.onkentes_id','foglalt.teljesitve','allat.allat_id')
                                        ->Join('allat','foglalt.allat_id','allat.allat_id')
                                        ->where('foglalt.allat_id',$id)
                                        ->where('foglalt.onkentes_id','!=', NULL)
                                        ->get()
        ]);
    }

    public function FoglalasPost(Request $req, $id){

        $today = now()->addDays(1)->format('Y-m-d');
        $twoweeks = now()->addWeeks(2)->format('Y-m-d');
        $allatID = (int)$id;

        if(Foglalt::where('allat_id', $id)
                    ->where('datum', $req->idopont)
                    ->exists()){
                        return back()->with('fogerr','Ez az időpont már foglalt!');
                    }

        $req->validate([
            'idopont'       =>  'required|date|after_or_equal:'.$today.'|before_or_equal:'.$twoweeks.'|date_format:Y-m-d'
        ],[
            'idopont.required'          =>  'Az időpontot nem töltötte ki!',
            'idpont.date'               =>  'Az időpontot dátum formájában adja meg!',
            'idopont.digits'            =>  'Az időpontnak 8 karakterből kell álnia!',
            'idopont.after_or_equal'    =>  'Az időpontot nem lehet a holnapi napnál korábbra foglalni!',
            'idopont.before_or_equal'   =>  'Az időpontot előre csak napra pontosan 2 héttel lehet!'
        ]);

        // Foglalt::create([
        //     'allat_id'      => $id,
        //     'datum'         => $req->idopont,
        //     'onkentes_id'   => auth()->id(),
        //     'elfogadas'     => 'e',
        //     'teljesitve'    => 0
        // ]);

        $data = new Foglalt;
        $data->allat_id     = $id;
        $data->datum        = $req->idopont;
        $data->onkentes_id  = Auth::id();
        // n = elutasitva, i = elfogadva, e = elfogadásra vár
        $data->elfogadas    = 'e';
        $data->teljesitve   = 0;

        if($data->Save()){
            return redirect('/mypage')->with('foglalas', 'Sikeresen foglaltál időpontot, hamarosan értesítjük az igénylésről!');
        }
    }
}
