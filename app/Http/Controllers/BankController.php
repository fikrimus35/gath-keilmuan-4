<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function show()
    {
        $transactions = Transaction::all();
        return view('bank', ['data' => $transactions]);
    }

    public function addTransaction(Request $request)
    {
        $input = $request->validate([
            'amount' => 'required|numeric'
        ]);


        $transaction = new Transaction();
        $transaction->amount = $input['amount'];
        $transaction->time_transaction = Carbon::now();
        $transaction->type = "PENGELUARAN";
        $transaction->save();

        return redirect('/bank');
    }
}
