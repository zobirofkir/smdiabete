<?php

namespace App\Filament\Resources\InscriptionResource\Pages;

use App\Filament\Resources\InscriptionResource;
use App\Mail\InscriptionAccepted;
use App\Mail\InscriptionRejected;
use App\Models\Inscription;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Mail;
use Filament\Actions\Action;

class ViewInscription extends ViewRecord
{
    protected static string $resource = InscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('accept')
                ->label('Accepter')
                ->icon('heroicon-o-check')
                ->action(function (Inscription $record) {
                    $record->status = 'accepted';
                    $record->save();

                    Mail::to($record->email)->send(new InscriptionAccepted($record));
                })
                ->requiresConfirmation()
                ->color('success')
                ->disabled(function (Inscription $record) {
                    return $record->status === 'accepted' || $record->status === 'refused';
                }),

            Action::make('reject')
                ->label('Rejeter')
                ->icon('heroicon-o-x-circle')
                ->action(function (Inscription $record) {
                    $record->status = 'refused';
                    $record->save();

                    Mail::to($record->email)->send(new InscriptionRejected($record));
                })
                ->requiresConfirmation()
                ->color('danger')
                ->disabled(function (Inscription $record) {
                    return $record->status === 'refused' || $record->status === 'accepted';
                }),

                // Previous Inscription
                Action::make('previous')
                ->label('Précédent')
                ->icon('heroicon-o-arrow-left')
                ->url(function (Inscription $record) {
                    $previous = Inscription::where('id', '<', $record->id)
                        ->orderBy('id', 'desc')
                        ->first();

                    return $previous ? url('admin/inscriptions/' . $previous->id) : null;
                })
                ->disabled(function (Inscription $record) {
                    // Disable if there is no previous record
                    return !Inscription::where('id', '<', $record->id)->exists();
                }),

                // Next Inscription
                Action::make('next')
                ->label('Suivant')
                ->icon('heroicon-o-arrow-right')
                ->url(function (Inscription $record) {
                    $next = Inscription::where('id', '>', $record->id)
                        ->orderBy('id', 'asc')
                        ->first();

                    return $next ? url('admin/inscriptions/' . $next->id) : null;
                })
                ->disabled(function (Inscription $record) {
                    // Disable if there is no next record
                    return !Inscription::where('id', '>', $record->id)->exists();
                }),

        ];
    }
}
