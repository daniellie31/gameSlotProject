<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'UserName' => 'required|max:255',
            'UserEmail' => 'required|unique:users|email',
            'UserPassword' => 'required',
            'UserGender' => 'required|in:male,female',
            'UserDOB' => 'required|before:today'
        ]);

        $validated['UserPassword'] = Hash::make($validated['UserPassword']);
        User::create($validated);

        $request->session()->flash('success','Registrasi berhasil ! silahkan Sign In ');
        return redirect('signIn');
    }
}
