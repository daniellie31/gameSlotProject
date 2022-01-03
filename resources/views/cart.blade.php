@extends('layout')
@section('title', 'Cart')

@section('content')
@section('content')
<link rel="stylesheet" href="{{ asset('css/manageGame.css') }}">

<div class="container">
    <a href="/checkout">
        <button type="button" class="btn btn-danger btn-sm float-right my-3">Checkout</button>
    </a>
    
    <table class="table bg-white" style="box-shadow: 0 0 6px 0 rgba(100, 100, 100, 0.26);">
        <thead>
            <tr>
                <th scope="col">Game Title</th>
                {{-- <th scope="col">PEGI Rating</th> --}}
                {{-- <th scope="col">Game Genre</th> --}}
                <th scope="col">Game Price</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>

            @if ($carts->isEmpty())
                <tr>
                    <td>
                        No Data
                    </td>
                </tr>
            @else
                @foreach ($carts as $c)
                    <tr>
                        <td>
                            <img class="game-logo" src="{{ Storage::url('images/' . $c->games->GameTitle) }}"
                                alt="image" /> {{ $c->games->GameTitle }}
                        </td>
                        {{-- <td style="vertical-align: middle">{{ $g->GamePegiRating }}</td> --}}
                        {{-- <td style="vertical-align: middle">{{ $g->genres->GameGenre }}</td> --}}
                        <td style="vertical-align: middle">{{ $c->games->GamePrice }}</td>
                        <td style="vertical-align: middle">
                            <form action="" method="get">
                                {{ csrf_field() }}
                                <button type="submit" class="button-edit">Update</button>
                            </form>

                        </td>
                        <td style="vertical-align: middle">
                            <form action="" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <button type="submit" class="delete">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>
</div>
@endsection
