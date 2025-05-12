<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommunicationResource\Pages\ListCommunications;
use App\Filament\Resources\CommunicationResource\Pages;
use App\Filament\Resources\CommunicationResource\RelationManagers;
use App\Models\AbstractInscription;
use Filament\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Actions\Action;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommunicationResource extends Resource
{
    protected static ?string $model = AbstractInscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Communications';

    protected static ?string $modelLabel = 'Communication';

    protected static ?string $pluralModelLabel = 'Communications';

    public static function form(Form $form): Form
    {
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('firstname')
                    ->searchable()
                    ->sortable()
                    ->label('Prénom'),

                Tables\Columns\TextColumn::make('lastname')
                    ->searchable()
                    ->sortable()
                    ->label('Nom de famille'),

                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->label('E-mail'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Date de création'),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Date de mise à jour'),
            ])
            ->filters([])
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
                TextEntry::make('firstname')
                    ->label('Prénom'),

                TextEntry::make('lastname')
                    ->label('Nom de famille'),

                TextEntry::make('email')
                    ->label('E-mail'),

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
                        ->action(function (AbstractInscription $record): \Symfony\Component\HttpFoundation\BinaryFileResponse {
                            $filePath = Storage::disk('public')->path($record->file);

                            if (!file_exists($filePath)) {
                                throw new \Exception('File not found');
                            }

                            return response()->download($filePath);
                        }),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCommunications::route('/'),
        ];
    }
}
