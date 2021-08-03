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
        if($request->has('search')){
            $beritaRight = Berita::where('judul', 'LIKE', '%'.$request->search. '%')->get();
        }else{
            $beritaRight = Berita::limit(5)->orderBy('id', 'DESC')->get();

        }
        $berita = Berita::orderBy('id', 'DESC')->get();
        $whatNews = Berita::orderBy('id', 'DESC')->simplePaginate(4);
        $kategori = Kategori::orderBy('id', 'DESC')->get();
        $topTrendText = Trending::limit(3)->orderBy('id', 'DESC')->get();
        $topTrend = Trending::limit(1)->orderBy('id', 'DESC')->get();
        $botTrend = Trending::inRandomOrder()->limit(3)->orderBy('id', 'DESC')->get();
        $topNews = Trending::inRandomOrder()->limit(5)->orderBy('id', 'DESC')->get();
        
        return view('fe-berita.index', 
        compact(
            'berita',
            'whatNews',
            'kategori',
            'topTrend', 
            'beritaRight', 
            'topTrendText',
            'botTrend',
            'topNews'
        ));
    }
}
