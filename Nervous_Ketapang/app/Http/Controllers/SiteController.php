<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
class SiteController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('fe-index.index',compact('product'));
    }
}
