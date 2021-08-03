<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('beranda'); //lokasi file resource/view/beranda.php
    }
    public function dashboard()
    {
        $kategori = Kategori::all();
        $totalBerita = Berita::count();
        $totalKategori = Kategori::count();
        $totalUser = User::count();
        return view('dashboard',compact('kategori', 'totalBerita', 'totalKategori', 'totalUser')); //lokasi file resource/view/beranda.php
    }
}
