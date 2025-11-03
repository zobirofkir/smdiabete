<?php

namespace App\Filament\Resources\InscriptionFormResource\Pages;

use App\Filament\Resources\InscriptionFormResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInscriptionForm extends EditRecord
{
    protected static string $resource = InscriptionFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
