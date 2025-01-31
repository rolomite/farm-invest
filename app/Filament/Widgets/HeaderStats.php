<?php

namespace App\Filament\Widgets;

use App\Models\Subscriber;
use App\Models\User;
use Bavix\Wallet\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HeaderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::query()->where('is_admin', false)->count()),
            Stat::make('Active Investment', Subscriber::query()->count()),
            Stat::make('Pending Transactions', Transaction::query()->where('confirmed', false)->count())
        ];
    }
}
