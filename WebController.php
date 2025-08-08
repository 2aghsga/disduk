<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home() {
        return view('home');
    }
    
    // Halaman dropdown Profil
    public function visiMisi() {
        return view('profil.visi-misi');
    }
    
    public function struktur() {
        return view('profil.struktur');
    }
    
    public function tugasFungsi() {
        return view('profil.tugas-fungsi');
    }
    
    public function pegawai() {
        return view('profil.pegawai');
    }
    
    public function layananProfil() {
        return view('profil.layanan');
    }
    
    public function kontak() {
        return view('kontak');
    }
    public function layananSD() {
    return view('layanan.sd');
}

public function layananSMP() {
    return view('layanan.smp');
}

public function layananSMA() {
    return view('layanan.sma');
}
public function berita() {
    return view('berita');

}
}