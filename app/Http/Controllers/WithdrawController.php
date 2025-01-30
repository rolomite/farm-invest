<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Bavix\Wallet\Models\Transaction;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function create()
    {
        $methods = PaymentMethod::query()->active()->get();

        if ($methods->isEmpty()) {
            return redirect()->route('dashboard')->with('warning', 'Deposit not available at the moment');
        }

        return view('withdraw', compact('methods'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric', 'min:1'],
            'wallet_address' => ['required', 'string'],
        ]);

        $transaction = $request->user()
            ->withdraw(
                $request->amount,
                ['method' => $request->input('method')],
                false
            );

        return redirect()->route('withdraw.show', $transaction);
    }

    public function show(Transaction $transaction)
    {
        $method = null;

        return view('transaction.show', compact('transaction', 'method'));
    }
}
