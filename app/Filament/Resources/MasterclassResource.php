<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MasterclassResource\Pages;
use App\Models\Masterclass;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;
use App\Mail\MasterclassValidated;
use Filament\Notifications\Notification;

class MasterclassResource extends Resource
{
    protected static ?string $model = Masterclass::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Masterclass';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('firstname')
                    ->label('First Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('lastname')
                    ->label('Last Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('ville')
                    ->label('City')
                    ->required()
                    ->maxLength(255),

                Select::make('secteur')
                    ->label('Sector')
                    ->required()
                    ->options([
                        'public' => 'Public',
                        'liberal' => 'Liberal',
                        'chu' => 'CHU',
                    ]),

                TextInput::make('phone')
                    ->label('Phone')
                    ->required()
                    ->maxLength(15),

                TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->maxLength(255),

                TextInput::make('adresse')
                    ->label('Address')
                    ->required()
                    ->maxLength(255),

                Textarea::make('objectif')
                    ->label('Objective')
                    ->required()
                    ->maxLength(500),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firstname')->label('Prénom'),
                TextColumn::make('lastname')->label('Nom'),
                TextColumn::make('ville')->label('City'),
                TextColumn::make('secteur')->label('Sector'),
                TextColumn::make('phone')->label('Phone'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('adresse')->label('Address'),
                TextColumn::make('objectif')->label('Objective'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),

                Action::make('validated')
                    ->label('Validated')
                    ->color('success')
                    ->icon('heroicon-o-check-circle')
                    ->action(function (Masterclass $record) {
                        $record->validated = true;
                        $record->save();

                        Mail::to($record->email)->send(new MasterclassValidated($record));

                        Notification::make()
                            ->title('Inscription validée')
                            ->body('L\'inscription a été validée avec succès.')
                            ->success()
                            ->send();
                    }),
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
            // Add any relations here if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMasterclasses::route('/'),
        ];
    }
}
