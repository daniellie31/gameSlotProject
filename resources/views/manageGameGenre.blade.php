@extends('layout')
@section('title', 'Manage Game Genre')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/manageGameGenre.css') }}">

    <div class="manageGameGenre-container">
        <div class="form-container">
            <table class="table table-borderless">
                <h2 class="font-weight-bold">Game Genre</h2>
                <tbody>
                    @foreach ($genres as $g)
                        <tr>
                            <td class="col-12">{{ $g->GameGenre }}</td>
                            <td><a href="">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
