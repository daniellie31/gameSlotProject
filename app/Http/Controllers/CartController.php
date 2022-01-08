<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Game;
use App\Models\Transaction;
use App\Models\TransactionDetails;
use App\Models\User;
use Database\Seeders\CartSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function viewCart(Request $request)
    {
        // $games = Game::all();
        $carts = Cart::where('UserId', Auth::user()->id)->get();
        return view('cart', compact('carts'));
    }

    public function addToCart(Request $request){

       $cart = Cart::where([
           ['GameId',$request->GameId], 
            ['UserId', Auth::user()->id]
       ])->first();

       if($cart == null ){
  

        Cart::create([
            'GameId' => $request->GameId,
            'UserId' => auth()->user()->id,
            'Qty' => 1
        ]);
       }else{
           $cart->Qty += 1;
           $cart->save();
       }
       return redirect('/cart');
    }                                  

    public function update(Request $req,$id){
        $cart = Cart::find($id);
        $cart->Qty = $req->Qty;
        $cart->save();
        return redirect('/cart');
    }


    public function deleteCart($id){
        $cart = Cart::find($id);
        $cart->delete();
       return redirect('/cart');
    }

    public function checkout(){
        $cart = Cart::where([
             ['UserId', Auth::user()->id]
        ])->get();

        $transaction_history = Transaction::create([
           'UserId' => $cart->first()->UserId,
           'TransactionDate' => date('Y-m-d H:i:s')
        ]);

        foreach ($cart as $key ) {
            TransactionDetails::create([
                'TransactionId' => $transaction_history->id,
                'GameId' => $key->GameId,
                'Qty' => $key->Qty
            ]);
        }

        Cart::where([
            ['UserId', Auth::user()->id]
         ])->delete();
        
        return redirect('/cart');
    }



}
