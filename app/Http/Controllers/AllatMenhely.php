<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allatok;
use App\Models\Fajta;

class AllatMenhely extends Controller
{
    public function Welcome($id){
        return view('welcome', [
            'oldallatokc'   =>  Allatok::select('allat.allat_id','allat.nev','allat.szuldatum','fajta')
                                        ->where('allat_id', $id)
                                        // ->where('')
                                        ->orderBy('szuldatum','DESC')
                                        ->limit(3)
                                        ->get()
        ]);
    }

    public function Allatok(){
        return view('allatok');
    }
}
