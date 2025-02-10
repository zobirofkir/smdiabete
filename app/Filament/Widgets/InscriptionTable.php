<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Inscription;
use Filament\Tables\Columns\TextColumn;

class InscriptionTable extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
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
            ->defaultSort('created_at', 'desc');
    }
}
