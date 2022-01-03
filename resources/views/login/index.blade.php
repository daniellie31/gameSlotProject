@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">

    <div class="sign-in-header">
        <img src="{{ Storage::url('images/GameSLot.png') }}" class="mid-logo" alt="">
        <h3 class="h3 mb-3 font-weight-bold" style="margin-top: 30px;">Sign in to your account</h3>
    </div>

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  
@endif

@if (session()->has('failed'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('failed') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  
@endif
<form class="form-signin card" action="/signIn" method="post">
    @csrf

    <label for="email">Email address</label>
    <input type="email" id="email" class="form-control @error('UserEmail') is-invalid @enderror"  autofocus name="UserEmail">
    @error('UserEmail')
    
    <div class="invalid-feedback">
        {{  $message }}
    </div>
  @enderror
    <label for="password">Password</label>
    <input type="password" id="password" class="form-control @error('UserPassword') is-invalid @enderror" required name="UserPassword">

    @error('UserEmail')
    <div class="invalid-feedback">
        {{  $message }}
    </div>
  @enderror
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
</form>
@endsection
