<?php

namespace App\Http\Controllers\Customer;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('product')->where('user_id', auth()->user()->id)->get();
        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart->product->price * $cart->quantity;
        }

        return view('pages.customers.cart.index', compact('carts', 'total'));
    }

    public function store($id)
    {
        $checkCart = Cart::where('product_id', $id)->where('user_id', auth()->user()->id)->first();

        if ($checkCart) {
            $checkCart->increment('quantity');
        } else {
            $cart = new Cart();
            $cart->product_id = $id;
            $cart->user_id = auth()->user()->id;
            $cart->quantity = 1;
            $cart->save();
        }

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang belanja.');
    }

    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang belanja.');
    }
}
