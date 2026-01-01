<?php

namespace App\Filament\Resources\AbstractFormResource\Pages;

use App\Filament\Resources\AbstractFormResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAbstractForm extends EditRecord
{
    protected static string $resource = AbstractFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
