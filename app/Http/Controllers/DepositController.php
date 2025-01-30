<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Bavix\Wallet\Models\Transaction;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function create()
    {
        $methods = PaymentMethod::query()->active()->get();

        if ($methods->isEmpty()) {
            return redirect()->route('dashboard')->with('warning', 'Deposit not available at the moment');
        }

        return view('deposit', compact('methods'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric', 'min:1'],
            'method' => ['required', 'string', 'exists:payment_methods,id'],
        ]);

        $transaction = $request->user()
            ->deposit(
                $request->amount,
                ['method' => $request->input('method')],
                false
            );

        return redirect()->route('deposit.show', $transaction);
    }

    public function show(Transaction $transaction)
    {
        $method = PaymentMethod::query()->findOrFail($transaction->meta['method']);

        return view('transaction.show', compact('transaction', 'method'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'transaction_id' => ['required', 'exists:transactions,id'],
            'upload' => ['required', 'file', 'max:1024'],
        ]);

        $path = null;
        if ($request->hasFile('upload'))
        {
            $path = $request->file('upload')->store('deposit', 'public');
        }

        $transaction = Transaction::query()->find($request->transaction_id);
        $transaction->update(['meta' => array_merge($transaction->meta, ['attachment' => $path])]);

        return redirect()->back()->with('success', 'Document uploaded successfully');
    }
}
