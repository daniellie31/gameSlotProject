<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{-- Icon  --}}
    <script src="https://kit.fontawesome.com/c2dd79deb8.js" crossorigin="anonymous"></script>

    {{-- Font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <title>@yield('title') - GameSLot</title>
    <link rel="icon" href="{{ Storage::url('images/GS.png') }}">

</head>

<body class="bg-light" style="padding-bottom: 70px; font-family: 'Poppins', sans-serif;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light"
            style="background-color: white; box-shadow: 0 0 6px 0 rgba(100, 100, 100, 0.26);">
            <div class="d-inline-flex" style="width: 92%">

                <a class="navbar-brand" href="/"><img src="{{ Storage::url('images/GameSLot.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @auth
                            @if (Auth::user()->isadmin == true)
                                <li class="nav-item">
                                    <a class="nav-link" href="/manageGame">Manage Game <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/manageGameGenre">Manage Game Genre <span
                                            class="sr-only">(current)</span></a>
                                </li>
                            @endif
                        @endauth
                    </ul>

                    <form class="form-inline my-2 my-lg-0" method="get" action="/search">
                        <input class="form-control mr-sm-3 " type="search" placeholder="Search" aria-label="Search"
                            name="keyword" style="width: 500px">
                    </form>

                    @auth
                        <div>
                            <a href="/cart" class="nav-link" style="color: grey;"><i
                                    class="fas fa-shopping-cart "></i></a>
                        </div>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (Auth::user()->pictures == null)
                                    <img src="{{ Storage::url('images/defaultAvatar.png') }}" alt="image"
                                        style="width: 24px; height:24px; clip-path: circle();" />
                                @else
                                    <img src="{{ Storage::url('images/' . Auth::user()->pictures) }}" alt="image"
                                        style="width: 24px; height:24px; clip-path: circle();" />
                                @endif
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item">Hi, <strong>{{ auth()->user()->name }}</strong></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/profile/{{ auth()->user()->id }}">Your Profile</a>
                                <a class="dropdown-item" href="/transaction">Transaction History</a>
                                <form action="/signOut" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item "><i class="fas fa-sign-out-alt"></i>
                                        <strong>Sign out</strong></button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="nav-item">
                            <a href="/signIn">
                                <button type="submit" class="btn btn-danger mr-2">Sign in</button>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="/signUp">
                                <button type="submit" class="btn btn-outline-danger">Sign up</button>
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>
    </header>


    <main>
        @yield('content')
    </main>

    <footer class="footer navbar-light bg-white fixed-bottom"
        style="box-shadow: 0 0 6px 0 rgba(100, 100, 100, 0.26); margin-top:auto;">
        <div class="container text-center py-3">
            <span class="text-muted">&copy 2021 SL, Inc. All rights reserved.</span>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
