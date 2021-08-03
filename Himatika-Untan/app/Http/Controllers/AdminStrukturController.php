<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminStrukturController extends Controller
{
    public function index()
    {
        $struktur = Struktur::all();
        return view('admin.struktur.dashboard', compact('struktur'));
    }
    public function ubah(Request $request)
    {
        $struktur = Struktur::find(1);
        if($request->hasFile('cover_img')) {
            
            $cover_img = $request->file('cover_img');
            $filename = time().'-'.$cover_img->getClientOriginalName() ;
            $struktur->cover_img = $filename;
            $request->validate([
                'cover_img'=>'mimes:png,jpg,jpeg|max:1024',
            ]);
            $request->cover_img->move(public_path('gambar'), $filename);
        }
        $struktur->Visi = $request->Visi;
        $struktur->Misi_a = $request->Misi_a;
        $struktur->Misi_b = $request->Misi_b;
        $struktur->Misi_c = $request->Misi_c;
        $struktur->Misi_d = $request->Misi_d;
        $struktur->Misi_e = $request->Misi_e;
        $struktur->ketua = $request->ketua;
        $struktur->sekretaris = $request->sekretaris;
        $struktur->bendahara = $request->bendahara;
        $struktur->k_keset = $request->k_keset;
        $struktur->s_keset = $request->s_keset;
        $struktur->k_kewi = $request->k_kewi;
        $struktur->s_kewi = $request->s_kewi;
        $struktur->k_psdm = $request->k_psdm;
        $struktur->s_psdm = $request->s_psdm;
        $struktur->k_aka = $request->k_aka;
        $struktur->s_aka = $request->s_aka;
        $struktur->k_humas = $request->k_humas;
        $struktur->s_humas = $request->s_humas;
        $struktur->k_seni = $request->k_seni;
        $struktur->s_seni = $request->s_seni;
        if($struktur->update())
        {

            return redirect()->route('admin.struktur.dashboard', ['id'=>$struktur->id])->withSuccess('Update success!');
        }
        else
        {
            return redirect()->route('admin.struktur.dashboard', ['id'=>$struktur->id])->withDanger('Update Error');
            
        }
    }
}
