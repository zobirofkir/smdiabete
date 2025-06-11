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
            /**
             * Section: Personal Information
             */
            Infolists\Components\Section::make('Informations personnelles')
                ->description('Détails personnels liés à cette attestation.')
                ->schema([
                    Infolists\Components\TextEntry::make('nom')
                        ->label('Nom')
                        ->icon('heroicon-o-user')
                        ->columns(1),
                    Infolists\Components\TextEntry::make('prenom')
                        ->label('Prénom')
                        ->icon('heroicon-o-user')
                        ->columns(1),
                    Infolists\Components\TextEntry::make('email')
                        ->label('Email')
                        ->icon('heroicon-o-envelope')
                        ->columns(1), 
                ])
                ->columns(1),

            /**
             * Section: Attestation Details
             */
            Infolists\Components\Section::make('Détails de l’attestation')
                ->description('Informations spécifiques concernant le type et la date de création.')
                ->schema([
                    Infolists\Components\TextEntry::make('attestation')
                        ->label('Type d’attestation')
                        ->icon('heroicon-o-document-text')
                        ->formatStateUsing(fn (string $state): string => match ($state) {
                            'presence' => '🟦 Attestation de présence',
                            'affichee' => '🟨 Attestation de communication affichée',
                            'orale' => '🟩 Attestation de communication orale',
                            default => $state,
                        })
                        ->columns(1),

                    Infolists\Components\TextEntry::make('created_at')
                        ->label('Date de création')
                        ->icon('heroicon-o-calendar')
                        ->dateTime('d/m/Y H:i')
                        ->columns(1),
                ])
                ->columns(1),
        ];
    }
}
