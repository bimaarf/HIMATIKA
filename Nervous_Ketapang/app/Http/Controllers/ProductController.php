<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use Session;

class ProductController extends Controller
{
    public function formTambah()
    {
        $product = Product::all();
        return view('fe-product.form_tambah_product', compact('product'));
    }
    public function tambah(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'cover_img'=>'required|image|mimes:png,jpg,jpeg|max:1024',
        ]);
        $file = $request->file('cover_img');
        $filename = time().'-'.$file->getClientOriginalName() ;
        $request->cover_img->storeAs('produk', $filename);

        // Product::create([
        //     'slug' => Str::slug($request->title, '-'),
        //     'key' => Str::random(30),
        //     'title' => $request->title,
        //     'deskripsi' => $request->deskripsi,
        //     'stok' => $request->stok,
        //     'harga_awal' => $request->harga_awal,
        //     'harga_akhir' => $request->harga_akhir,
        //     'cover_img' => $request->cover_img,
        //     'user_id' =>auth()->user()->id,
        // ]);

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
        if($product->save())
        {
            Session::flash('sukses','Product Added successfully');

            return redirect()->route('fe-product.form_tambah_product');

        }elseif($product->error())
        {
            Session::flash('gagal','product does not added');
            return redirect()->route('fe-product.form_tambah_product');
            
        }

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
        $request->validate([
            'title' => 'required',
            'cover_img'=>'image|mimes:png,jpg,jpeg|max:1024',
        ]);
        if($request->hasFile('cover_img')) {
            
            $cover_img = $request->file('cover_img');
            $filename = time().'-'.$cover_img->getClientOriginalName() ;
            $product->cover_img = $filename;
            
            $request->cover_img->storeAs('produk', $filename);
        }
        if($product->update())
        {
            Session::flash('sukses','Product changed successfully');

            return redirect()->route('fe-product.form_ubah_product', ['slug' => $product->slug]);

        }else
        {
            Session::flash('gagal','product does not change');
            return redirect()->route('fe-product.form_ubah_product', ['slug' => $product->slug]);
            
        }

        
    }
    public function hapus($id)
    {
        $product = Product::find($id);
        $product->delete();
        Session::flash('sukses_produk','Product deleted successfully');
        return redirect()->route('fe-index.index');
    }

}
