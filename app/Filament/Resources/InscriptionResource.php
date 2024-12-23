<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InscriptionResource\Pages;
use App\Models\Inscription;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class InscriptionResource extends Resource
{
    protected static ?string $model = Inscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Inscriptions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('firstname')->required(),
                Forms\Components\TextInput::make('lastname')->required(),
                Forms\Components\TextInput::make('ville')->required(),
                Forms\Components\TextInput::make('secteur')->required(),
                Forms\Components\TextInput::make('phone')->required()->tel(),
                Forms\Components\TextInput::make('email')->required()->email(),
                Forms\Components\TextInput::make('adresse')->required(),
                Forms\Components\Textarea::make('objectif')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('firstname')->label('Prénom')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('lastname')->label('Nom')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('ville')->label('Ville')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('secteur')->label('Secteur')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('phone')->label('Téléphone')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
                Tables\Columns\TextColumn::make('adresse')->label('Adresse')->searchable(),
                Tables\Columns\TextColumn::make('objectif')->label('Objectif')->searchable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('validate')
                ->label('Valider')
                ->color('success')
                ->action(function ($record) {
                    $existingUser = User::where('email', $record->email)->first();

                    if ($existingUser) {
                        $record->delete();

                        Notification::make()
                            ->title('L\'utilisateur existe déjà')
                            ->body('L\'utilisateur existe déjà. Inscription supprimée.')
                            ->warning()
                            ->send();

                        return;
                    }

                    $password = $record->firstname . '+123';

                    $user = User::create([
                        'name' => $record->firstname . ' ' . $record->lastname,
                        'email' => $record->email,
                        'password' => Hash::make($password),
                    ]);

                    Mail::send([], [], function ($message) use ($record, $password) {
                        $message->to($record->email)
                            ->subject('Vos informations de connexion')
                            ->text("Bonjour {$record->firstname},\n\nVoici vos informations de connexion :\n\nEmail : {$record->email}\nMot de passe : $password\n\nMerci.");
                    });

                    $record->delete();

                    Notification::make()
                        ->title('Utilisateur créé')
                        ->body('L\'utilisateur a été créé avec succès et l\'inscription supprimée.')
                        ->success()
                        ->send();
                    }),

                Tables\Actions\Action::make('refuse')
                    ->label('Refuser')
                    ->color('danger')
                    ->action(function ($record) {
                        $record->delete();
                    }),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInscriptions::route('/'),
        ];
    }
}
