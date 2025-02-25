<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbstractInscriptionResource\Pages;
use App\Filament\Resources\AbstractInscriptionResource\RelationManagers;
use App\Models\AbstractInscription;
use Filament\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Components\Actions\Action;
use Filament\Infolists\Components\Actions;

class AbstractInscriptionResource extends Resource
{
    protected static ?string $model = AbstractInscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Abstracts';

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
                Tables\Columns\TextColumn::make('firstname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lastname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('firstname')->label('Prénom'),
                TextEntry::make('lastname')->label('Nom de famille'),
                TextEntry::make('email')->label('E-mail'),
                TextEntry::make('created_at')
                    ->label('Date de création')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->label('Date de mise à jour')
                    ->dateTime(),
                Actions::make([
                    Action::make('downloadFile')
                        ->label('Télécharger le fichier')
                        ->color('primary')
                        ->action(function ($record) {
                            $filePath = storage_path('app/public/' . $record->file);
                            if (file_exists($filePath)) {
                                return response()->download($filePath);
                            } else {
                                return back()->withError('Fichier non trouvé');
                            }
                        }),
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
            'index' => Pages\ListAbstractInscriptions::route('/'),
        ];
    }
}
