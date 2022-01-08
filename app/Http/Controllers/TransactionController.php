<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function viewTransaction(){
        $transaction = Transaction::where('UserId', Auth::user()->id)->get();
        // dd($transaction->first()->transactionDetails->first()->transaction_id);
        return view('transaction', compact('transaction'));
    }

    public function viewTransactionDetail($id){
        $total = 0;

        $transactionDetail = TransactionDetails::where('transaction_id', $id)->get();
        $viewTD = TransactionDetails::where('transaction_id', $id)->first();
        // dd($transactionDetail->transaction_id);
        foreach($transactionDetail as $td){
            $total += $td->game->GamePrice * $td->Qty;
        }
        return view('transactionDetail', compact('transactionDetail', 'total', 'viewTD'));
    }
}