<?php

namespace App\Filament\Resources\AbstractFormResource\Pages;

use App\Filament\Resources\AbstractFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbstractForms extends ListRecords
{
    protected static string $resource = AbstractFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
