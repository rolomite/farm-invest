<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Bavix\Wallet\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('dashboard', [
            'plans' => Plan::all(),
            'user' => $request->user(),
            'pending_balance' => (Transaction::query()->where(['type' => 'deposit', 'confirmed' => false])->sum('amount')),
            'transactions' => Transaction::query()->latest()->limit(6)->get(),
        ]);
    }
}
