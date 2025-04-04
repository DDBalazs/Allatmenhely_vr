<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allatok;
use App\Models\Fajta;
use App\Models\Foglalt;
use App\Models\Meret;

class AllatMenhely extends Controller
{
    public function Welcome(){
        return view('welcome', [
            'oldallatokk'   =>  Allatok::select('allat.allat_id', 'allat.nev','allat.fajta_id','fajta.fajta_id','fajta.faj','allat.beerkezes_datuma')
                                            ->join('fajta', 'allat.allat_id','=','fajta.fajta_id')
                                            ->where('fajta.faj','kutya')
                                            ->OrderBy('allat.beerkezes_datuma')
                                            ->limit(3)
                                            ->get(),

            'oldallatokc'   =>  Allatok::select('allat.allat_id', 'allat.nev','allat.fajta_id','fajta.fajta_id','fajta.faj','allat.beerkezes_datuma')
                                            ->join('fajta', 'allat.allat_id','=','fajta.fajta_id')
                                            ->where('fajta.faj','macska')
                                            ->OrderBy('allat.beerkezes_datuma')
                                            ->limit(3)
                                            ->get()
        ]);
    }

    public function Allatok(){
        return view('allatok',[
            'allatok'   =>  Allatok::orderBy('allat.allat_id')
                                    ->get()
        ]);
    }

    public function AllatokPost(Request $req){
        #dd($req);

        $animalsql = " ";
        $selectedanimal = $req->input('kperm');
        $selectednem = $req->input('nem');
        $selectedkor = $req->input('age');
        $selectedmeret = $req->input('size');

        // faj keresése
        if($selectedanimal == "dog"){
            $animalsql = $animalsql." AND fajta.faj = 'kutya' ";
        } elseif ($selectedanimal == "cat"){
            $animalsql = $animalsql." AND fajta.faj = 'macska' ";
        } else{
            $animalsql = $animalsql." ";
        }
        // Nem keresése
        if($selectednem == "him"){
            $animalsql = $animalsql." AND nem = 1 ";
        } elseif($selectednem == "nosteny"){
            $animalsql = $animalsql." AND nem = 0";
        } else{
            $animalsql = $animalsql." ";
        }
        // Kor keresése
        if($selectedkor = "puppy"){
            $animalsql = $animalsql." AND YEAR(CURRENT_DATE) - year(szuldatum) < 1";
        }elseif($selectedkor = "young"){
            $animalsql = $animalsql." AND YEAR(CURRENT_DATE) - year(szuldatum) BETWEEN 1 AND 3";
        }elseif($selectedkor = "adult"){
            $animalsql = $animalsql." AND YEAR(CURRENT_DATE) - year(szuldatum) BETWEEN 3 AND 8";
        }elseif($selectedkor = "senior"){
            $animalsql = $animalsql." AND YEAR(CURRENT_DATE) - year(szuldatum) > 8";
        }else{
            $animalsql = $animalsql." ";
        }

        // Méret keresése
        if($selectedmeret = "small"){
            $animalsql = $animalsql." AND meret.meret_id = 1 OR meret.meret_id = 2 OR meret.meret_id = 6";
        }elseif($selectedmeret = "medium"){
            $animalsql = $animalsql." AND meret.meret_id = 3 OR meret.meret_id = 7";
        }elseif($selectedmeret = "large"){
            $animalsql = $animalsql." AND meret.meret_id = 4 OR meret.mered_id = 5 OR meret.meret_id = 8";
        }


        $rendezessql = "";
        $selectedrendezes = $req->input('sort');
        // Rendezés
        if($selectedrendezes = "newest"){
            $rendezessql = " ORDER BY allat.beerkezes_datuma DESC";
        }elseif($selectedrendezes = "oldest"){
            $rendezessql = " ORDER BY allat.beerkezes_datuma ASC";
        }elseif($selectedrendezes = "name-asc"){
            $rendezessql = " Order By allat.nev DESC";
        }elseif($selectedrendezes = "name-desc"){
            $rendezessql = " Order by allat.nev ASC";
        }else{
            $rendezessql = " ";
        }


        $result = Allatok::selectRaw('SELECT allat.allat_id, allat.fajta_id, allat.nev, allat.meret_id, allat.szin, allat.nem, meret.meret_id, meret.kategoria, fajta.faj
                                    FROM allat
                                    JOIN meret ON allat.meret_id = meret.meret_id
                                    JOIN fajta ON allat.fajta_id = fajta.fajta_id
                                    '.$animalsql.$rendezessql);


        return view('allatok', [
            "result" => $result
        ]);
    }

    public function AllatData($id){
        return view('allat',[
            'lekertallat'   =>  Allatok::find($id),
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
                                        ->where('foglalt.onkentes_id',NULL)
                                        ->get()
        ]);
    }

    public function Foglalas(){
        return view('foglalas',[

        ]);
    }

    public function FoglalasData(){
        return view('foglalas',[

        ]);
    }
}
