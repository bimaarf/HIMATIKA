<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index($name)
    {
        $user = User::where('name', $name)->first();
        $product = Product::all();
        return view('fe-toko.index', compact('user', 'product'));
    }
}
