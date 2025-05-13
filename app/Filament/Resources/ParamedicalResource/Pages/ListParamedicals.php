<?php

namespace App\Filament\Resources\ParamedicalResource\Pages;

use App\Filament\Resources\ParamedicalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParamedicals extends ListRecords
{
    protected static string $resource = ParamedicalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
