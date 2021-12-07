@extends('layout')
@section('title', 'Manage Game')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/manageGame.css') }}">

    <div class="container">
        <a href="addGame"><button class="addGame">Add Game</button></a>
        <table class="table bg-white" style="box-shadow: 0 0 6px 0 rgba(100, 100, 100, 0.26);">
            <thead>
                <tr>
                    <th scope="col">Game Title</th>
                    <th scope="col">PEGI Rating</th>
                    <th scope="col">Game Genre</th>
                    <th scope="col">Game Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $g)
                    <tr>
                        <td>
                            <img src="{{ Storage::url('images/' . $g->GameImage) }}" alt="image" /> {{ $g->GameTitle }}
                        </td>
                        <td style="vertical-align: middle">{{ $g->GamePegiRating }}</td>
                        <td style="vertical-align: middle">{{ $g->genres->GameGenre }}</td>
                        <td style="vertical-align: middle">{{ $g->GamePrice }}</td>
                        <td style="vertical-align: middle"><button type="button" class="button">Edit</button></td>
                        <td style="vertical-align: middle">
                        <form action = "/delete-game/{{ $g->id }}" method="post">
                          {{method_field('delete')}}
                          {{ csrf_field() }}
                          <button type="submit" class="delete">Delete</button>
                        </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection