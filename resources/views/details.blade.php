@extends('layout')
@section('title', 'Game Details')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    @if (session('message'))
        {{session('message')}}
    @endif
    <div class="background-container">
        <div class="content bg-white">
            <h1 class="game-detail-title">{{ $games->GameTitle }}</h1>
            <div class="detail-container bg-light">
                <div class="left-detail">
                    <div class="game-genre-container bg-danger">
                        <p> {{ $games->genres->GameGenre }}</p>
                    </div>
                    <p>{{ $games->GameDesc }}</p>
                </div>
                <div class="right-detail">
                    <div class="rating-price">
                        <div class="rating">
                            <p>Rating: {{ $games->GamePegiRating }}</p>
                        </div>
                        <div class="price">
                            @if ($games->GamePrice == 0)
                                <p class="card-text text-center">Free</p>
                            @else
                                <p class="card-text text-center">${{ $games->GamePrice }}</p>
                            @endif
                        </div>
                    </div>
                    <form action="/add-to-cart" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="button-add-to-cart">
                            <button type="button" class="btn btn-danger btn-lg">Add to Cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
