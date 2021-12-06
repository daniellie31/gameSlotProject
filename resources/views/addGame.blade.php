@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/addGame.css') }}">

<div class="addGame-container">
    <div class="form-container">
        <h4>Add Game</h4>
        <form action="/addGame" method="post" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td>Game Title</td>
                    <td><input type="text" name="title" id=""></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td><input type="file" name="photo" id=""></td>
                </tr>
                <tr>
                    <td>Description</td>
                    {{-- rows="4" cols="50" --}}
                    <td><textarea name="description" form="usrform"></textarea></td>
                    {{-- <td><input type="text" name="description" id="" placeholder="Input Description"></td> --}}
                </tr>
                <tr>
                    <td>Game Price</td>
                    <td><input type="text" name="price" id=""></td>
                </tr>
                <tr>
                    <td>Game Genre</td>
                    {{-- <td><input type="text" name="title" id="" placeholder="Input Title"></td> --}}
                    <td>
                        <select id="genre-option">
                            @foreach ($genre as $g)
                                <option value="{{$g->GenreId}}">{{$g->GameGenre}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>PEGI Rating</td>
                    {{-- <td><input type="text" name="title" id="" placeholder="Input Title"></td> --}}
                    <td>
                        <select id="rating">
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
                    <td colspan="2"><button type="submit">Add</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection


