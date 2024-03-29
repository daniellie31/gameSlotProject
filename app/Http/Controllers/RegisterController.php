<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function sign_up()
    {
        return view('/signUp');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'gender' => 'required|in:male,female',
            'dob' => 'required|before:-13 years'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        //   User::create($validated);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'gender' => $validated['gender'],
            'dob' => $validated['dob'],
            'isadmin' => false
        ]);

        $request->session()->flash('success', 'Registrasi berhasil ! silahkan Sign In');
        return redirect('signIn');
    }
}
