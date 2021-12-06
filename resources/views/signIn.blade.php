@extends('layout')
@section('title', 'Sign In')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <div class="sign-in-header">
        <img src="{{ Storage::url('images/GameSLot.png') }}" class="mid-logo" alt="">
        <h3 class="h3 mb-3 font-weight-bold" style="margin-top: 30px;">Sign in to your account</h3>
    </div>
    <form class="form-signin card">
        <label for="inputEmail">Email address</label>
        <input type="email" id="inputEmail" class="form-control" required="" autofocus="">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" required="">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
    </form>

@endsection
