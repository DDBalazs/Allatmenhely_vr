<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allatok;
use App\Models\Fajta;

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

    public function Allatok($id){
        return view('allatok',[
            'allatok'   => Allatok::find($id)
        ]);
    }
}
