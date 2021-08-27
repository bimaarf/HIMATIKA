<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Session;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    public function tambah(Request $request, $id)
    {
        $post = Post::find($id);
        $cmt = new Comment();
        $cmt->comment = $request->comment;
        $cmt->post_id = $post->id;
        $cmt->user_id = Auth::id();
        if($cmt->save())
        {
            Session::flash('sukses','Your comment added successfully');

            return redirect()->route('fe-index.index');

        }else
        {
            Session::flash('gagal','comment does not added');
            return redirect()->route('fe-index.index');
            
        }
    }
}
