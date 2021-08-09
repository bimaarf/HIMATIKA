<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
class SiteController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('id', 'DESC')->get();
        $order = Order::orderBy('id', 'DESC')->get();
        return view('fe-index.index',compact('product', 'order'));
    }
    public function order()
    {
        $order = Order::orderBy('id', 'DESC')->get();
        return view('fe-order.index', compact('order'));
    }
}
