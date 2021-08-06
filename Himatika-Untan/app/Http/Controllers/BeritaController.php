<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Struktur;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $berita = Berita::orderBy('id', 'DESC')->get();
        $side = Berita::limit(6)->orderBy('id', 'DESC')->get();
        $struktur = Struktur::all();
        return view('fe-berita.index', compact('berita', 'side', 'struktur'));
    }
    public function tentang(Request $request)
    {
        $berita = Berita::orderBy('id', 'DESC')->get();
        $side = Berita::limit(6)->orderBy('id', 'DESC')->get();
        $struktur = Struktur::all();
        return view('fe-berita.tentang', compact('berita', 'struktur', 'side'));
    }
    public function profilKami(Request $request)
    {
        $berita = Berita::orderBy('id', 'DESC')->get();
        $side = Berita::limit(6)->orderBy('id', 'DESC')->get();
        $struktur = Struktur::all();
        return view('fe-berita.profil-kami', compact('berita', 'struktur', 'side'));
    }
    public function detail($key)
    {
        $btop = Berita::all();
        $berita = Berita::where('key' ,$key)->first();
        $side = Berita::limit(6)->orderBy('id', 'DESC')->get();
        $struktur = Struktur::all();
        return view('fe-berita.views', compact('btop', 'berita', 'struktur', 'side'));
    }
}
