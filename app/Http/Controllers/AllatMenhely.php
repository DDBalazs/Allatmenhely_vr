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
        
        if($req->has('kperm')){
            $kperm = $req->kperm;
        }
        $result = Allatok::selectRaw('select allat.allat_id,allat.fajta_id, allat.nev, allat.fajta_id, allat.meret_id,allat.szin,allat.nem,meret.meret_id,meret.kategoria, fajta.fajta_id, fajta.faj
                                        FROM allat,meret,fajta
                                        WHERE allat.fajta_id = fajta.fajta_id
                                        AND allat.meret_id = meret.meret_id')
                        ->get();
        return view('allatok', [

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
