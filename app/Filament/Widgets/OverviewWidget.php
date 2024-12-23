<?php

namespace App\Filament\Widgets;

use App\Models\Inscription;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $userCount = User::count();
        $inscriptionCount = Inscription::count();

        return [
            Stat::make('Utilisateurs', $userCount)
                ->icon('heroicon-o-user-group')
                ->color('success')
                ->description('Nombre total d\'utilisateurs inscrits')
                ->chart([5, 10, 8, 15, 20]),

            Stat::make('Inscriptions', $inscriptionCount)
                ->icon('heroicon-o-document-text')
                ->color('success')
                ->description('Nombre total d\'inscriptions')
                ->chart([3, 7, 5, 9, 12]),

            Stat::make('Total', $userCount + $inscriptionCount)
                ->icon('heroicon-o-chart-bar')
                ->color('success')
                ->description('Nombre total d\'utilisateurs et d\'inscriptions')
                ->chart([10, 15, 20, 30, 40]),
        ];
    }
}
