<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function log_in()
    {
        return view('/signIn');
    }

    public function authenticate(Request $request)
    {
        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('failed', 'Sign In Gagal !');
    }

    public function signOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
