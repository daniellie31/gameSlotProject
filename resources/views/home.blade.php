@extends('layout')
@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

<div class="row m-2 d-flex justify-content-center">
    @foreach ($games as $g)
    <div class="col col-sm-3">
        <div class="card bg-light mb-3 border">
            <div class="card-body">
                <div>
                    <a href="/detail/{{$g->GameId}}">
                        <img class="card-img-top rounded-img" src="{{Storage::url('images/'.$g->GameImage)}}" alt="image" />
                    </a>
                    <div class="m-3">
                        <h5 class="card-title text-center">{{$g->GameTitle}}</h5>
                        <div class="d-flex justify-content-center">
                            <span class="badge badge-pill badge-danger">
                                <p class="card-text genre-color">{{$g->genres->GameGenre}}</p>
                            </span>
                        </div>
                        <p class="card-text text-center">${{$g->GamePrice}}</p>
                    </div>
                </div>
            </div>

                {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}

        </div>
    </div>
    @endforeach

</div>

    {{-- <div class="card-deck">
        @foreach ($games as $g)
            <div class="card">
                <img class="card-img-top" src="{{Storage::url($g->GameImage)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$g->GameTitle}}</h5>
                    <p class="card-text">{{$g->GameDesc}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        @endforeach
    </div> --}}

@endsection
