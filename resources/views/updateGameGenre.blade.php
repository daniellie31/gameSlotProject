@extends('layout')
@section('title', 'Update Game Genre')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/addGame.css') }}">

    <div class="addGame-container">
        <div class="form-container">
            <h2 class="font-weight-bold">Update Game Genre</h2>
            <form action="/updateGameGenre/{{ $genres->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-borderless">
                    <tr>
                        <td colspan="2">Game Genre</td>
                        <td><input type="text" name="GameGenre" id="" style="width: 100%" placeholder="{{ $genres->GameGenre }}"></td>
                    </tr>

                    <tr>
                        <td colspan="2"></td>
                        <td align="right"><button class="btn btn-danger" type="submit">Update</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

@endsection
