<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Bavix\Wallet\Exceptions\BalanceIsEmpty;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscribe', [
            'plans' => Plan::query()->get(),
        ]);
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'plan_id' => ['required', 'exists:App\Models\Plan,id'],
        ]);

        try{
            $plan = Plan::query()->find($request->plan_id);

            $request->user()->withdraw($plan->price);
            $subscription = $request->user()->subscription()->firstOrCreate([
                'plan_id' => $plan->id,
            ], [
                'plan_id' => $plan->id,
                'amount' => 0,
                'profit' => 0,
            ]);

            $subscription->increment('amount', $plan->price);

            return redirect('/dashboard')->with('success', "You have successfully subscribed to $plan->name.");
        }catch (BalanceIsEmpty){
            return redirect()->back()->with(['error' => 'balance is empty']);
        }
    }
}
