<?php

namespace App\Filament\Resources\AttestationResource\Pages;

use App\Filament\Resources\AttestationResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists;

class ViewAttestation extends ViewRecord
{
    protected static string $resource = AttestationResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getInfolists(): array
    {
        return [
            Infolists\Components\Section::make('Informations de l’attestation')
                ->schema([
                    Infolists\Components\TextEntry::make('nom')->label('Nom'),
                    Infolists\Components\TextEntry::make('prenom')->label('Prénom'),
                    Infolists\Components\TextEntry::make('email')->label('Email'),
                    Infolists\Components\TextEntry::make('attestation')
                        ->label('Type d’attestation')
                        ->formatStateUsing(fn (string $state): string => match ($state) {
                            'presence' => 'Attestation de présence',
                            'affichee' => 'Attestation de communication affichée',
                            'orale' => 'Attestation de communication orale',
                            default => $state,
                        }),
                    Infolists\Components\TextEntry::make('created_at')
                        ->label('Date de création')
                        ->dateTime('d/m/Y H:i'),
                ])
                ->columns(2),
        ];
    }
}
