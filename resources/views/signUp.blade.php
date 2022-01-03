@extends('layout')
@section('title', 'Sign Up')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <div class="sign-in-header">
        <img src="{{ Storage::url('images/GameSLot.png') }}" class="mid-logo" alt="">
        <h3 class="h3 mb-3 font-weight-bold" style="margin-top: 30px;">Sign up your account</h3>
    </div>

    <form class="form-signin card" action="/signUp" method="post">
        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" autofocus name="name">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

        <label for="email">Email address</label>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" autofocus
            name="email">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

        <label for="password">Password</label>
        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
            name="password">

        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

        <div class="checkbox mb-3" style="margin: 8px 0;">
            <label>Gender</label><br>
            <div class="form-check form-check-inline ">
                <input class="form-check-input  @error('gender') is-invalid @enderror" type="radio" name="gender"
                    id="inlineRadio1" value="male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input  @error('gender') is-invalid @enderror" type="radio" name="gender"
                    id="inlineRadio2" value="female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
        </div>

        @error('gender')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" style="margin-bottom:20px;"
            class="@error('dob') is-invalid @enderror">
        <button class="btn btn-lg btn-danger btn-block" type="submit">Sign up</button>
    </form>

@endsection
