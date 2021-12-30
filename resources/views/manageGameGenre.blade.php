@extends('layout')
@section('title', 'Manage Game Genre')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/manageGameGenre.css') }}">

    <div class="manageGameGenre-container">
        <div class="form-container">
            <table class="table table-borderless" style="box-shadow: 0 0 6px 0 rgba(100, 100, 100, 0.26);">
                <h2 class="font-weight-bold">Game Genre</h2>
                <tbody class="bg-white">
                    @foreach ($genres as $g)
                        <tr>
                            <td class="col-12">{{ $g->GameGenre }}</td>
                            <td><a href="/updateGameGenre/{{$g->GenreId}}">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
