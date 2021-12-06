@extends('layout')

@section('content')
<body class="text-center bsignin">
    <link rel="stylesheet" href="{{ asset("css/signin.css") }}">

    <h1 class="h3 mb-3 font-weight-normal" style="margin-top: 150px">GameSLot</h1>
    <h3 style="font-weight:bold">Sign in to your account</h3>
    <div class="signin">
        <form>
           
            <label for="inputEmail" class="sr-only">Email address</label>
            <input style="width: 100%;margin:auto" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input style="width: 100%;margin:auto" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <div class="checkbox mb-3">
              <label style="padding: 10px">
                <input  type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button style="width: 100%;margin:auto" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    
          </form>
    </div>
  
    
    </body>
 
@endsection
