<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allatok;
use App\Models\Fajta;

class AllatMenhely extends Controller
{
    public function Welcome($id){
        return view('welcome', [
            'oldallatokc'   =>  Allatok::select('allat.allat_id','allat.nev','allat.szuldatum','fajta.fajta_id','fajta.faj')
                                        ->Join('allat','allat_id','fajta_id')
                                        ->where('allat.allat_id',$id)
                                        ->where('fajta.faj','')
                                        ->orderBy('allat.szuldatum')
                                        ->limit(3)
                                        ->get(),
            'oldallatokk'   =>  Allatok::sel
        ]);
    }

    public function Allatok(){
        return view('allatok');
    }
}
