<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use Session;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function formTambah($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('fe-order.form_tambah_order', compact('product'));
    }
    public function tambah(Request $request, $id)
    {
        $product = Product::find($id);
        $order = new Order();
        $order->user_id = Auth::id();
        $order->product_id = $product->id;
        $order->quantity = $request->quantity;
        $order->price = $request->price;
        $order->address = $request->address;
        $order->message = $request->message;
        
        if ($order->save())
        {
            return redirect()->route('fe-index.index')->withSuccess('Update success!');
        }else{
            return redirect()->route('fe-order.form_tambah_order')->withErrors($order->errors());
        }
    }
    public function hapus($id)
    {
        $order = Order::find($id);
        $order->delete();
        Session::flash('sukses','Order deleted successfully');
        return redirect()->route('fe-index.index');
    }
}
