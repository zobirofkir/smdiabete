<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbstractFormResource\Pages;
use App\Filament\Resources\AbstractFormResource\RelationManagers;
use App\Models\AbstractForm;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbstractFormResource extends Resource
{
    protected static ?string $model = AbstractForm::class;
    protected static ?string $navigationGroup = 'Abstract';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbstractForms::route('/'),
            'create' => Pages\CreateAbstractForm::route('/create'),
            'edit' => Pages\EditAbstractForm::route('/{record}/edit'),
        ];
    }
}
