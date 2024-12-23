<?php

namespace App\Filament\Resources\MasterclassResource\Pages;

use App\Filament\Resources\MasterclassResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMasterclasses extends ListRecords
{
    protected static string $resource = MasterclassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
