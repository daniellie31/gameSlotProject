@extends('layout')
@section('title', 'Sign Up')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <div class="sign-in-header">
        <img src="{{ Storage::url('images/GameSLot.png') }}" class="mid-logo" alt="">
        <h3 class="h3 mb-3 font-weight-bold" style="margin-top: 30px;">Sign up your account</h3>
    </div>
    <form class="form-signin card">
        <label for="inputName">Name</label>
        <input type="text" id="inputName" class="form-control" required="" autofocus="">
        <label for="inputEmail">Email address</label>
        <input type="email" id="inputEmail" class="form-control" required="" autofocus="">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" required="">
        <div class="checkbox mb-3" style="margin: 8px 0;">
            <label>Gender</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
        </div>
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" style="margin-bottom:20px;">
        <button class="btn btn-lg btn-danger btn-block" type="submit">Sign up</button>
    </form>

@endsection
