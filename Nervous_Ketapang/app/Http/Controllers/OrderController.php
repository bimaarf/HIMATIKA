<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function formTambah()
    {
        return view('fe-order.form_tambah_order');
    }
}
