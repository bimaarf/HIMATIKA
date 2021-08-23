<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Post;
use Session;
class PostController extends Controller
{
    public function post(Request $request)
    {
        $request->validate([
            'post' => 'required',
            'cover_img'=>'image|mimes:png,jpg,jpeg|max:1024',
        ]);
        

        $post = new Post();
        $post->post = $request->post;
        $post->user_id = Auth::id();
        if($request->hasFile('cover_img')) {
            
            $file = $request->file('cover_img');
            $filename = time().'-'.$file->getClientOriginalName() ;
            $post->cover_img = $filename;
            
            $request->cover_img->storeAs('post', $filename);
        }else{
            $file = $request->file('cover_img');
            $filename = time();
            $post->cover_img = $filename;
            
        }
        if($post->save())
        {
            Session::flash('sukses','Your post added successfully');

            return redirect()->route('fe-index.index');

        }else
        {
            Session::flash('gagal','Post does not added');
            return redirect()->route('fe-index.index');
            
        }

    }

    public function ubah(Request $request, $id)
    {
        $post = Post::find($id);
        $post->post = $request->post;
        $post->user_id = Auth::id();
        $request->validate([
            'post' => 'required',
            'cover_img'=>'image|mimes:png,jpg,jpeg|max:1024',
        ]);
        if($request->hasFile('cover_img')) {
            
            $cover_img = $request->file('cover_img');
            $filename = time().'-'.$cover_img->getClientOriginalName() ;
            $post->cover_img = $filename;
            
            $request->cover_img->storeAs('post', $filename);
        }
        if($post->update())
        {
            Session::flash('sukses','Your post changed successfully');

            return redirect()->route('fe-index.index');

        }else
        {
            Session::flash('gagal','Post does not change');
            return redirect()->route('fe-index.index');
            
        }

    }

    public function hapus($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('sukses','Your post deleted successfully');
        return redirect()->route('fe-index.index');
    }
}
