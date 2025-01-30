<?php

namespace App\Http\Controllers;

use Bavix\Wallet\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        return view('transaction.index', [
            'transactions' => Transaction::query()->latest()->paginate(),
        ]);
    }
}
