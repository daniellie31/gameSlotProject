<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function log_in()
    {
        return view('/signIn');
    }

    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember_me = $request->RememberMe;

        if (Auth::attempt($credentials)) {
            if($remember_me){
                Cookie::queue('email', $email, 60);
                Cookie::queue('password', $password, 60);
            }
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
