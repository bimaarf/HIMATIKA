<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index(Request $request, $name)
    {
        if($request->has('search')){
            $product = Product::where('title', 'LIKE', '%'.$request->search. '%')->get();

        }else{
            $product = Product::orderBy('id', 'DESC')->get();
        }
        $user = User::where('name', $name)->first();
        return view('fe-toko.index', compact('user', 'product'));
    }
}
