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
        $conditions = [];
        $params = [];

        // Faj szűrés
        if($req->has('kperm') && in_array($req->input('kperm'), ['dog', 'cat'])) {
            $selectedanimal = $req->input('kperm');
            if($selectedanimal == "dog") {
                $conditions[] = "(fajta.fajta_id IN (1, 2, 3, 4, 8))";
            } elseif ($selectedanimal == "cat") {
                $conditions[] = "(fajta.fajta_id IN (5, 6, 7, 9))";
            }
        }

        // Nem szűrés
        if($req->has('nem') && in_array($req->input('nem'), ['him', 'nosteny'])) {
            $conditions[] = "allat.nem = " . ($req->input('nem') == 'him' ? 1 : 0);
        }

        // Kor szűrés
        if($req->has('age') && in_array($req->input('age'), ['puppy', 'young', 'adult', 'senior'])) {
            $selectedkor = $req->input('age');
            switch($selectedkor) {
                case 'puppy':
                    $conditions[] = "YEAR(CURRENT_DATE) - YEAR(allat.szuldatum) < 1";
                    break;
                case 'young':
                    $conditions[] = "YEAR(CURRENT_DATE) - YEAR(allat.szuldatum) BETWEEN 1 AND 3";
                    break;
                case 'adult':
                    $conditions[] = "YEAR(CURRENT_DATE) - YEAR(allat.szuldatum) BETWEEN 3 AND 8";
                    break;
                case 'senior':
                    $conditions[] = "YEAR(CURRENT_DATE) - YEAR(allat.szuldatum) > 8";
                    break;
            }
        }

        // Méret szűrés (itt most csak egy értéket kezel, checkbox-okhoz módosítani kell)
        if($req->has('size') && in_array($req->input('size'), ['small', 'medium', 'large'])) {
            $selectedmeret = $req->input('size');
            switch($selectedmeret) {
                case 'small':
                    $conditions[] = "(allat.meret_id IN (1, 2))";
                    break;
                case 'medium':
                    $conditions[] = "allat.meret_id = 3";
                    break;
                case 'large':
                    $conditions[] = "(allat.meret_id IN (4, 5))";
                    break;
            }
        }

        // Örökbefogadhatóság
        if($req->has('status') && in_array($req->input('status'), ['adoptable', 'cannotad'])) {
            $conditions[] = "allat.orokbefogadhato = " . ($req->input('status') == 'adoptable' ? 1 : 0);
        }

        // Alap lekérdezés
        $query = DB::table('allat')
            ->select('allat.allat_id', 'allat.fajta_id', 'allat.nev', 'allat.meret_id', 'allat.szin', 'allat.nem',
                    'meret.meret_id', 'meret.kategoria', 'fajta.faj')
            ->join('fajta', 'allat.fajta_id', '=', 'fajta.fajta_id')
            ->join('meret', 'allat.meret_id', '=', 'meret.meret_id');

        // Feltételek hozzáadása
        if(!empty($conditions)) {
            $query->whereRaw(implode(' AND ', $conditions));
        }

        // Rendezés
        if($req->has('sort')) {
            switch($req->input('sort')) {
                case 'newest':
                    $query->orderBy('allat.beerkezes_datuma', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('allat.beerkezes_datuma', 'asc');
                    break;
                case 'name-asc':
                    $query->orderBy('allat.nev', 'asc');
                    break;
                case 'name-desc':
                    $query->orderBy('allat.nev', 'desc');
                    break;
            }
        }

        $result = $query->get();

        return view('allatok', [
            'allatok' => Allatok::query()
                ->select('allat.allat_id','allat.nev','allat.fajta_id','allat.chip_sorszam',
                         'allat.szuldatum','allat.meret_id','allat.szin','allat.ivartalanitott',
                         'allat.orokbefogadhato','allat.beerkezes_datuma','allat.megjegyzes',
                         'fajta.fajta_id','fajta.faj')
                ->join('fajta','allat.fajta_id','fajta.fajta_id')
                ->orderBy('allat.allat_id')
                ->get(),
            "result" => $result
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

        // Ellenőrizzük, hogy a kiválasztott nap kedd vagy vasárnap-e
        $selectedDay = date('N', strtotime($req->idopont)); // 1 (hétfő) - 7 (vasárnap)
        if ($selectedDay == 2 || $selectedDay == 7) { // 2 = kedd, 7 = vasárnap
            return back()->with('fogerr', 'Sajnos kedden és vasárnap nem lehet foglalni!');
        }

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
