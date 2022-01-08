@extends('layout')
@section('title', 'Transaction Detail')

@section('content')
    <div class="container">
        <div class="d-flex flex-row justify-content-between mt-5">
            <h3>Transaction ID : {{$viewTD->transaction_id}}</h3>
            <h3>Transaction Date : {{$viewTD->created_at}}</h3>
        </div>
        <h3 class="mb-5">Customer : {{$viewTD->transaction->user->name}}</h3>
        <table class="table bg-white" style="box-shadow: 0 0 6px 0 rgba(100, 100, 100, 0.26);">
            <thead>
                <tr>
                    <th scope="col">Game Title</th>
                    <th scope="col">Game Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Sub Total</th>
                </tr>
            </thead>
            <tbody>
                @if ($transactionDetail->isEmpty())
                    <tr>
                        <td>
                            No Data
                        </td>
                    </tr>
                @else
                    @foreach ($transactionDetail as $td)
                        <tr>
                            <td>
                            <img style="border-radius: 10%; width: 100px; height:60px;" src="{{ Storage::url('images/' . $td->game->GameImage) }}"
                                    alt="image" /> {{ $td->game->GameTitle }}
                                </td>
                            <td style="vertical-align: middle">${{number_format($td->game->GamePrice) }}</td>
                            <td style="vertical-align: middle">{{ $td->Qty }}</td>
                            <td style="vertical-align: middle">${{number_format($td->game->GamePrice * $td->Qty) }}</td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <h4 class="d-flex justify-content-end text-danger">Total : ${{number_format($total)}}</h4>
    </div>
@endsection
