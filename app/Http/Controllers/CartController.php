<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function viewCart()
    {
        // $games = Game::all();
        $carts = Cart::where('UserId', Auth::user()->id)->get();
        return view('cart', compact('carts'));
    }

    public function addToCart(Request $request){
        $carts = Cart::where('GameId','=',$request->GameId)->first();


        if (Cart::where('GameId','=' ,$request->GameId)->count() > 0){
            Cart::where('GameId','=' ,$request->GameId)->update([
                'Qty' =>  $carts->Qty +1
            ]);

            return redirect('/cart');
        }else{
            Cart::create([
                'GameId' => $request->GameId,
                'UserId' => Auth::user()->id,
                'Qty'=> 1
            ]);
            return redirect('/cart');
        }
        
      
    }

    public function update(Request $req,$id){
     

        Cart::where('GameId',$id)->update([
            'Qty' => $req->Qty
        ]);

        return redirect('/cart');
    }

    public function deleteCart($id){
        Cart::where('GameId','=',$id)->delete();
       return redirect('/cart');
    }

}
