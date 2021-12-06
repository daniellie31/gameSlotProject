@extends('layout')

@section('content')
<body class="text-center">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <form class="form-signin">
        <h1 style="margin-top:200px" class="h3 mb-3 font-weight-normal">GameSLot</h1>
        <h1 style="font-weight:bold" class="h3 mb-3 font-weight-normal">Sign in to your account</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input style="width: 200px;margin:auto" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input style="width: 200px;margin:auto" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox mb-3">
            <label style="padding: 10px">
            <input  type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button style="width: 200px;margin:auto" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">© 2017-2021</p>
    </form>

    </body>

@endsection
