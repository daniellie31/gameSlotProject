<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Game;
use App\Models\User;

class CartController extends Controller
{
    public function viewCart()
    {
        $carts = Cart::all();
        return view('cart', compact('carts'));
    }

    public function addToCart()
    {
        $carts = new Cart();
        $games = new Game();
        $users = new User();

        $carts->id = $games->id;
        $carts->UserId = $users->id;
        // $carts->GamePrice = $request->GamePrice;
        $carts->save();

        return redirect()->back()->with('message', 'berhasil add to cart');
    }
}
