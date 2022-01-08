@extends('layout')
@section('title', 'Transaction History')

@section('content')
    <div class="container mt-5">
        <table class="table bg-white" style="box-shadow: 0 0 6px 0 rgba(100, 100, 100, 0.26);">
            <thead>
                <tr>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Transaction Date</th>
                    <th scope="col">Total Item</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @if ($transaction->isEmpty())
                    <tr>
                        <td>
                            No Data
                        </td>
                    </tr>
                @else
                    @foreach ($transaction as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->created_at }}</td>
                            <td>{{ count($t->transactionDetails) }}</td>
                            <td><a href="/transactionDetail/{{$t->id}}">Details</a></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
