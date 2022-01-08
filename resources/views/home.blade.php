@extends('layout')
@section('title', 'Home')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    <div class="row m-2 d-flex mt-4 justify-content-center">
        @foreach ($games as $g)
            <div class="col col-sm-2" style="max-width: 600px; margin:10px;">
                <div class="card bg-white mb-3 border">
                    <div class="card-body d-flex justify-content-center ">
                        <div class="d-flex flex-column text-center">
                            <a href="/details/{{ $g->id }}">
                                <img class="card-img-top rounded-img" src="{{ Storage::url('images/' . $g->GameImage) }}"
                                    alt="image" style="width: 120px; height:120px;" />
                            </a>
                            <div class="m-3">
                                <h5 class="card-title text-center">{{ $g->GameTitle }}</h5>
                                <div class="d-flex justify-content-center">
                                    <span class="badge badge-pill badge-danger">
                                        <p class="card-text genre-color">{{ $g->genres->GameGenre }}</p>
                                    </span>
                                </div>
                                @if ($g->GamePrice == 0)
                                    <p class="card-text text-center">Free</p>
                                @else
                                    <p class="card-text text-center">Rp.  {{ number_format($g->GamePrice) }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination justify-content-center">
        {{ $games->links() }}
    </div>

@endsection
