<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function viewCart()
    {
        $carts = Cart::where('UserId', Auth::user()->id)->get();
        return view('cart', compact('carts'));
    }

    public function addToCart(Request $request){
        Cart::create([
            'GameId' => $request->gameId,
            'UserId' => Auth::user()->id,
            'Qty'=> 1
        ]);
        return redirect('/cart');
    }
}