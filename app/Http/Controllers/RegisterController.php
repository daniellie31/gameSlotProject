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
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'gender' => 'required|in:male,female',
            'dob' => 'required|before:today'
        ]);

        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        $request->session()->flash('success','Registrasi berhasil ! silahkan Sign In');
        return redirect('signIn');
    }
}