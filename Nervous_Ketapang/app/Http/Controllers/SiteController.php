<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
class SiteController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('fe-index.index',compact('product'));
    }
    public function order()
    {
        return view('fe-order.index');
    }
}
