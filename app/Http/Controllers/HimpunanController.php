<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HimpunanController extends Controller
{
    // FORM DAFTAR 
    public function formDaftar()
    {
        return view('daftar');
    }

    public function prosesDaftar(Request $request)
    {
        $data = $request->all();
        return view('hasil', compact('data'));
    }

// FORM ASPIRASI
public function formAspirasi()
    {
    return view('aspirasi');
    }

public function prosesAspirasi(Request $request)
    {
    $data = $request->all();
    return view('hasil_aspirasi', compact('data'));
    }
}
