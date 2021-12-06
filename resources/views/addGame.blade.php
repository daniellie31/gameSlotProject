@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/addGame.css') }}">

<div class="addGame-container">
    <div class="form-container">
        <h2 class="font-weight-bold">Add Game</h2>
        <form action="/addGame" method="post" enctype="multipart/form-data">
            @csrf
            <table class="table table-borderless">
                <tr>
                    <td colspan="2">Game Title</td>
                    <td><input type="text" name="title" id="" style="width: 100%"></td>
                </tr>
                <tr>
                    <td colspan="2">Photo</td>
                    <td><input type="file" name="photo" id=""></td>
                </tr>
                <tr>
                    <td colspan="2">Description</td>
                    <td><textarea name="description" form="usrform" style="width: 100%"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">Game Price</td>
                    <td><input type="text" name="price" id="" style="width: 100%"></td>
                </tr>
                <tr>
                    <td colspan="2">Game Genre</td>
                    {{-- <td><input type="text" name="title" id="" placeholder="Input Title"></td> --}}
                    <td>
                        <select id="genre-option" style="width: 100%">
                            @foreach ($genres as $g)
                                <option value="{{$g->GenreId}}">{{$g->GameGenre}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">PEGI Rating</td>
                    {{-- <td><input type="text" name="title" id="" placeholder="Input Title"></td> --}}
                    <td>
                        <select id="rating" style="width: 100%">
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
                    <td align="right"><button class="btn btn-danger" type="submit">Add</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection


