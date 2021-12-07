<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - GameSLot</title>
    <link rel="icon" href="{{Storage::url('images/GS.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow: 0 0 6px 0 rgba(100, 100, 100, 0.26);">
            <a class="navbar-brand" href="/"><img src="{{Storage::url('images/GameSLot.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/manageGame">Manage Game <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/manageGameGenre">Manage Game Genre <span class="sr-only">(current)</span></a>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" style="width: 500px" type="search" placeholder="Search" aria-label="Search">
                    </form>

                </ul>
                <a href="/signIn" class="ml-auto"><button type="submit" class="btn btn-danger mr-2">Sign in</button></a>
                <a href="/signUp"><button type="submit" class="btn btn-outline-danger">Sign up</button></a>
                {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer navbar-light bg-white navbar-fixed-bottom" style="box-shadow: 0 0 6px 0 rgba(100, 100, 100, 0.26);">
        <div class="container text-center py-3">
            <span class="text-muted">&copy 2021 SL, Inc. All rights reserved.</span>
        </div>
    </footer>


</body>
</html>
