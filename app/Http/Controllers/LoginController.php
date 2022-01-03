<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request){

       $credentials =  $request->validate([
            'UserEmail' => 'required|email',
            'UserPassword' => 'required'
        ]);

      
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('failed','Sign In Gagal !');

      
    }
}
