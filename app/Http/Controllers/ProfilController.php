<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function standarisasi(){
        $filePath = public_path('/Share Draft SE Standardisasi Norma Kerja PKS (220623).pdf');
        return response()->download($filePath, 'Share Draft SE Standardisasi Norma Kerja PKS (220623).pdf');
    }
    public function sejarah(){
        return view('profil.sejarah');
    }
    public function visimisi(){
        return view('profil.visi');

    }
    public function lokasi(){
        return view('profil.lokasi');
    }
    public function struktur(){
        return view('profil.struktur');
    }
}
