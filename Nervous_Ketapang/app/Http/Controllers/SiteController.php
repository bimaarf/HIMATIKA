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
class SiteController extends Controller
{
    public function index()
    {
        $user = User::all();
        $roleUser = DB::table('role_user')->where('role_id', '3')->get();
        $roles = Role::all();
        $product = Product::orderBy('id', 'DESC')->get();
        $order = Order::orderBy('id', 'DESC')->get();
        return view('fe-index.index',compact('product', 'order', 'user', 'roleUser', 'roles'));
    }
    public function order()
    {
        $order = Order::orderBy('id', 'DESC')->get();
        return view('fe-order.index', compact('order'));
    }
}
