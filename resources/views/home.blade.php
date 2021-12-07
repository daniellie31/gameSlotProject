@extends('layout')
@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

<div class="row m-2 d-flex justify-content-center">
    @foreach ($games as $g)
    <div class="col col-sm-2 mt-5">
        <div class="card bg-white mb-3 border">
            <div class="card-body">
                <div>
                    <a href="/details/{{$g->id}}">
                        <img class="card-img-top rounded-img" src="{{Storage::url('images/'.$g->GameImage)}}" alt="image" />
                    </a>
                    <div class="m-3">
                        <h5 class="card-title text-center">{{$g->GameTitle}}</h5>
                        <div class="d-flex justify-content-center">
                            <span class="badge badge-pill badge-danger">
                                <p class="card-text genre-color">{{$g->genres->GameGenre}}</p>
                            </span>
                        </div>
                        @if ($g->GamePrice == 0)
                            <p class="card-text text-center">Free</p>
                        @else
                            <p class="card-text text-center">${{$g->GamePrice}}</p>
                        @endif
                    </div>
                </div>
            </div>
                {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
        </div>
    </div>
    @endforeach
</div>
<div class="pagination justify-content-center">
    {{ $games->links() }}
</div>

@endsection
