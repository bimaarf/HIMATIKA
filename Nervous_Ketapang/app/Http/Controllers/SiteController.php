<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\RoleUser;
use App\Models\Role;
use App\Models\Post;
class SiteController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $post = Post::where('post', 'LIKE', '%'.$request->search. '%')->get();

        }else{
            $post = Post::orderBy('id', 'DESC')->get();
        }
        
        $user = User::all();
        
        $userSide = User::limit(4)->orderBy('id', 'DESC')->get();
        $roleUser = DB::table('role_user')->where('role_id', '2')->get();
        $owner = DB::table('role_user')->where('role_id', '1')->get();
        $roles = Role::all();
        $product = Product::orderBy('id', 'DESC')->get();
        $order = Order::orderBy('id', 'DESC')->get();
        return view('fe-index.index',compact('post', 'product', 'order', 'user', 'userSide', 'roleUser', 'owner', 'roles'));
    }
    public function order()
    {
        $order = Order::orderBy('id', 'DESC')->get();
        return view('fe-order.index', compact('order'));
    }

}
