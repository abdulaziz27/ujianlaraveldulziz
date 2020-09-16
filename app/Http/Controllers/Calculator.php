<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
    // Func Volume Tabung
    public function tabung (Request $request)
    {
        $r = $request->input('jari2');
        $t = $request->input('tinggi');
        $phi = 3.14;
        $vtabung = $phi * $r * $r * $t;       
        
        return redirect('/tabung')->with('info','Volume Tabung Adalah : ' . $vtabung);       
    }

    // Func Volume Bola
    public function bola(Request $request) 
    {
        $r = $request->input('jari2');       
        $phi = 3.14;
        $vbola = 3 / 4 * $phi * $r * $r * $r;
        
        return redirect('/bola')->with('info','Volume Bola Adalah : ' . $vbola);       

    }

    // Func Volume Kerucut
    public function kerucut(Request $request)
    {
        $r = $request->input('jari2');
        $t = $request->input('tinggi');
        $phi = 3.14;
        $vkerucut = 1 / 3 * $phi * $r * $r * $t;

        return redirect('/kerucut')->with('info','Volume Kerucut Adalah : ' . $vkerucut);
    }
}
