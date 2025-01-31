<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\HeaderStats;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            HeaderStats::make()
        ];
    }
}
