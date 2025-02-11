<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Inscription;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;

class InscriptionTable extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        $inscriptionCount = Inscription::count();

        return $table
            ->query(Inscription::query())
            ->columns([
                TextColumn::make('firstname')
                    ->label('Prénom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('lastname')
                    ->label('Nom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Téléphone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('ville')
                    ->label('Ville'),
                TextColumn::make('status')
                    ->label('Statut')
                    ->formatStateUsing(function ($state) {
                        switch ($state) {
                            case 'pending':
                                return 'En attente';
                            case 'accepted':
                                return 'Accepté';
                            case 'refused':
                                return 'Rejeté';
                            default:
                                return 'Inconnu';
                        }
                    })
                    ->color(function ($state) {
                        switch ($state) {
                            case 'pending':
                                return 'warning';
                            case 'accepted':
                                return 'success';
                            case 'refused':
                                return 'danger';
                            default:
                                return 'muted';
                        }
                    })
                    ->sortable()
                    ->searchable(),
            ])
            ->headerActions([
                Tables\Actions\ViewAction::make()
                    ->label("Accueil")
                    ->url('/')
                    ->icon('heroicon-s-home')
                    ->extraAttributes(['style' => 'background-color: #4ae900;'])
                    ->color('success'),

                Tables\Actions\ViewAction::make()
                    ->label("Les inscriptions ($inscriptionCount)")
                    ->url('/admin/inscriptions')
                    ->icon('heroicon-s-user-group')
                    ->extraAttributes(['style' => 'background-color: #00c6bd;'])
                    ->color('success'),

                Action::make('car_count')
                    ->label("Total inscriptions: $inscriptionCount")
                    ->icon('heroicon-s-chart-bar')
                    ->extraAttributes(['style' => 'background-color: #cfaa00;']),

            ])
            ->defaultSort('created_at', 'desc');
    }
}
