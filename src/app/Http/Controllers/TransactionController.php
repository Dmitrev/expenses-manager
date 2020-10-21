<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create(Request $request)
    {
        $transaction = new Transaction();
        $transaction->amount = $request->input('amount');
        $transaction->category_id = $request->input('category_id');
        return $transaction->save();
    }

    public function all()
    {
        return Transaction::paginate(15);
    }
}
