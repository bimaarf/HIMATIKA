<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $berita = Berita::all();
        return view('fe-berita.index', compact('berita'));
    }
}
