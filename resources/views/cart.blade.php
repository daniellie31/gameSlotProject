@extends('layout')
@section('title', 'Cart')

@section('content')
<link rel="stylesheet" href="{{ asset('css/manageGame.css') }}">



<div class="container">
    @php
        $total =0;
    @endphp
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
                            <img class="game-logo" src="{{ Storage::url('images/' . $c->game->GameImage) }}"
                                alt="image" /> {{ $c->game->GameTitle }}
                        </td>

                        <td style="vertical-align: middle"> @currency($c->game->GamePrice) </td>
                        <td style="vertical-align: middle">
                            <form action="/cart/{{ $c->GameId }}" method="post">
                                {{ csrf_field() }}

                                <input type="text" name="Qty" value="{{ $c->Qty }}">
                                {{-- <select name="Qty" class="quantity" data-item="{{ $c->GameId }}" id="">
                                    @for($i = 1 ;$i<=10; $i++)
                                        <option value="{{ $i }}" {{ $c->Qty == $i ? 'selected' : '' }}> {{ $i }}</option>
                                    @endfor
                                    
                                </select> --}}
                                <button type="submit" class="button-edit">Update</button>
                            </form>
                           
                        </td>
                            
                        <td style="vertical-align: middle">
                            <form action="/delete-cart/{{ $c->GameId }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <button type="submit" class="delete">Remove</button>
                            </form>
                        </td>

                        
                    </tr>
                  @php
                       $total += ($c->game->GamePrice * $c->Qty);
                  @endphp
                @endforeach
               
  
            

        </tbody>
    </table>
    <h3>Item in cart  :  {{ $c->count();  }}</h3>
    <h3> Total :@currency($total)</h3>
    @endif
</div>
@endsection


