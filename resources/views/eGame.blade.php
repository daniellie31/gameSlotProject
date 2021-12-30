@extends('layout')
@section('title', 'Edit Game')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/addGame.css') }}">

    <div class="addGame-container">
        <div class="form-container">
            <h2 class="font-weight-bold">Edit Game</h2>
            <form action="/eGame/{{ $games->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-borderless">
                    <tr>
                        <td colspan="2">Game Title</td>
                        <td><input type="text" name="GameTitle" id="" style="width: 100%" placeholder="{{ $games->GameTitle }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Photo</td>
                        <td><input type="file" name="GameImage" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="2">Description</td>
                        {{-- <td><textarea name="GameDesc" form="usrform" style="width: 100%"></textarea></td> --}}
                        <td><input type="text" name="GameDesc" id="" style="width: 100%"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Game Price</td>
                        <td><input type="text" name="GamePrice" id="" style="width: 100%"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Game Genre</td>
                        {{-- <td><input type="text" name="title" id="" placeholder="Input Title"></td> --}}
                        <td>
                            <select id="genre-option" style="width: 100%" name="GenreId">
                                @foreach ($genres as $g)
                                    <option value="{{ $g->GenreId }}">{{ $g->GameGenre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">PEGI Rating</td>
                        {{-- <td><input type="text" name="title" id="" placeholder="Input Title"></td> --}}
                        <td>
                            <select id="rating" style="width: 100%" name="GamePegiRating">
                                <option value="0">0</option>
                                <option value="3">3</option>
                                <option value="7">7</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
                            </select>
                        </td>
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
