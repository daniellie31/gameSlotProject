@extends('layout')
@section('title', 'Cart')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/manageGame.css') }}">

    <div class="container mt-5">
        @if (session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failed') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @php
            $total = 0;
        @endphp

        <form action="/checkout" method="post">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm float-right my-3">Checkout</button>
        </form>

        <table class="table bg-white" style="box-shadow: 0 0 6px 0 rgba(100, 100, 100, 0.26);">
            <thead>
                <tr>
                    <th scope="col">Game Title</th>
                    <th scope="col">Game Price</th>
                    <th scope="col">Quantity</th>

                </tr>
            </thead>

            <tbody>
                @if ($carts->isEmpty())
                    <tr>
                        <td>No Data</td>
                    </tr>
                @else
                    @foreach ($carts as $c)
                        <tr>
                            <td>
                                <img class="game-logo" src="{{ Storage::url('images/' . $c->game->GameImage) }}"
                                    alt="image" /> {{ $c->game->GameTitle }}
                            </td>

                            <td style="vertical-align: middle">${{ number_format($c->game->GamePrice) }} </td>

                            <td style="vertical-align: middle">
                                <form action="/cart/{{ $c->id }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="text" name="Qty" value="{{ $c->Qty }}">
                                    <td style="vertical-align: middle">
                                        <button type="submit" class="button-edit">Update</button>
                                    </td>
                                </form>
                            </td>

                            <td style="vertical-align: middle">
                                <form action="/delete-cart/{{ $c->id }}" method="post">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="delete">Remove</button>
                                </form>
                            </td>
                        </tr>


                        @php
                            $total += $c->game->GamePrice * $c->Qty;
                        @endphp

                    @endforeach
                    <h3 class="text-danger"> Total : ${{ number_format($total) }}</h3>
                @endif
            </tbody>
        </table>
    </div>
@endsection
