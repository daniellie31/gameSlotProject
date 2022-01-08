@extends('layout')
@section('title', 'Game Details')
@section('content')
    {{-- <link rel="stylesheet" href="{{ asset('css/details.css') }}"> --}}
    <div class="container p-5 mt-5 mb-5" style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h1 class="text-center">{{ $games->GameTitle }}</h1>
        <div class="container d-flex mt-5">
            <div class="container left">
                <img class="rounded" style="width: 500px; height:300px;" src="{{ Storage::url('images/' . $games->GameImage) }}"
            alt="image" />
            </div>
            <div class="container right">
                <div>
                    <span class="badge badge-pill badge-danger mb-3">
                        <p class="card-text genre-color">{{ $games->genres->GameGenre }}</p>
                    </span>
                    <p>{{ $games->GameDesc }}</p>
                    <p class="h5 mb-3 text-muted">Pegi Rating: {{ $games->GamePegiRating }}</p>
                    @if ($games->GamePrice == 0)
                        <p class="h2">Free</p>
                    @else
                        <p class="h2">${{number_format($games->GamePrice)}}</p>
                    @endif
                    <form action="/add-to-cart" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="button-add-to-cart">
                            <input type="hidden" value="{{$games->id}}" name="GameId">
                            <button type="submit" class="btn btn-danger btn-lg">Add to Cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="background-container">
        <div class="content bg-white">
            <h1 class="game-detail-title">{{ $games->GameTitle }}</h1>

            <div class="detail-container bg-light">
                <div class="left-detail">
                    <img class="game-logo" style="width: 300px;" src="{{ Storage::url('images/' . $games->GameImage) }}"
            alt="image" />
                </div>
                <div class="right-detail">
                    <div class="game-genre-container bg-danger">
                        <p> {{ $games->genres->GameGenre }}</p>
                    </div>
                    <p>{{ $games->GameDesc }}</p>
                    <div class="rating-price">
                        <div class="rating">
                            <p>Rating: {{ $games->GamePegiRating }}</p>
                        </div>
                        <div class="price">
                            @if ($games->GamePrice == 0)
                                <p class="card-text text-center">Free</p>
                            @else
                                <p class="card-text text-center">${{number_format($games->GamePrice)}}</p>
                            @endif
                        </div>
                    </div>
                    <form action="/add-to-cart" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="button-add-to-cart">
                            <input type="hidden" value="{{$games->id}}" name="GameId">
                            <button type="submit" class="btn btn-danger btn-lg">Add to Cart</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
