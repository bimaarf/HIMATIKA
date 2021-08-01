<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function formTambah()
    {
        $product = Product::all();
        return view('fe-product.form_tambah_product', compact('product'));
    }
    public function tambah(Request $request)
    {
        $target_directory = 'produk';
        $request->validate([
            'cover_img'=>'mimes:png,jpg,jpeg|max:1024',
        ]);
        $file = $request->file('cover_img');
        $filename = time().'-'.$file->getClientOriginalName() ;
        $request->cover_img->move(public_path('produk'), $filename);

        $product = new Product();
        $product->slug = Str::slug($request->title, '-'); 
        $product->key = Str::random(30);
        $product->title = $request->title;
        $product->deskripsi = $request->deskripsi;
        $product->stok = $request->stok;
        $product->harga_awal = $request->harga_awal;
        $product->harga_akhir = $request->harga_akhir;
        $product->cover_img = $filename;
        $product->user_id = Auth::id();
        $product->save();

        return redirect()->route('fe-index.index');
    }
    public function formUbah($slug)
    {

        $product = Product::where('slug' ,$slug)->first();

        return view('fe-product.form_ubah_product', compact('product'));
    }
    public function ubah(Request $request, $slug)
    {
        $product = Product::where('slug' ,$slug)->first();
        $product->slug = Str::slug($request->title, '-'); 
        $product->title = $request->title;
        $product->deskripsi = $request->deskripsi;
        $product->stok = $request->stok;
        $product->harga_awal = $request->harga_awal;
        $product->harga_akhir = $request->harga_akhir;
        $product->user_id = Auth::id();
        if($request->hasFile('cover_img')) {
            
            $cover_img = $request->file('cover_img');
            $filename = time().'-'.$cover_img->getClientOriginalName() ;
            $product->cover_img = $filename;
            $request->validate([
                'cover_img'=>'mimes:png,jpg,jpeg|max:1024',
            ]);
            $request->cover_img->move(public_path('produk'), $filename);
        }
        
        if($product->update())
        {

            return redirect()->route('fe-index.index')->withSuccess('Update success!');
        }
        else
        {
            return redirect()->route('fe-index.index')->withDanger('Update Error');
            
        }

        
    }
    public function hapus($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('fe-index.index');
    }

}
