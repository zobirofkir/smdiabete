<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InscriptionResource\Pages;
use App\Models\Inscription;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;
use App\Mail\InscriptionAccepted;
use App\Mail\InscriptionRejected;

class InscriptionResource extends Resource
{
    protected static ?string $model = Inscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Inscriptions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('firstname')
                    ->required()
                    ->label('Prénom'),
                Forms\Components\TextInput::make('lastname')
                    ->required()
                    ->label('Nom'),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->label('Téléphone'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Email'),
                Forms\Components\TextInput::make('secteur')
                    ->label('Secteur'),
                Forms\Components\TextInput::make('type')
                    ->label('Type'),
                Forms\Components\TextInput::make('specialite')
                    ->label('Spécialité'),
                Forms\Components\TextInput::make('ville')
                    ->label('Ville'),
                Forms\Components\DatePicker::make('departure_date')
                    ->required()
                    ->label('Date de départ'),
                Forms\Components\Select::make('payment_method')
                    ->options([
                        'laboratoire' => 'Laboratoire',
                        'virement' => 'Virement',
                        'invite' => 'Invite',
                    ])
                    ->label('Méthode de paiement'),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'En attente',
                        'accepted' => 'Accepté',
                        'rejected' => 'Rejeté',
                    ])
                    ->default('pending')
                    ->label('Statut'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firstname')
                    ->label('Prénom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('lastname')
                    ->label('Nom')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Téléphone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('secteur')
                    ->label('Secteur'),
                TextColumn::make('type')
                    ->label('Type'),
                TextColumn::make('specialite')
                    ->label('Spécialité'),
                TextColumn::make('ville')
                    ->label('Ville'),
                TextColumn::make('departure_date')
                    ->label('Date de départ'),
                TextColumn::make('payment_method')
                    ->label('Méthode de paiement'),

                TextColumn::make('rib_pdf_path')
                    ->label('Télécharger le RIB')
                    ->formatStateUsing(function ($state) {
                        if ($state) {
                            return '<a href="' . asset('storage/' . $state) . '" target="_blank" class="text-indigo-600 hover:text-indigo-900">Télécharger</a>';
                        }
                        return '<span class="text-gray-500">Aucun fichier</span>';
                    })
                    ->html()
                    ->sortable()
                    ->searchable(),

            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\ViewAction::make(),
                Action::make('accept')
                    ->label('Accepter')
                    ->icon('heroicon-o-check')
                    ->action(function (Inscription $record) {
                        $record->status = 'accepted';
                        $record->save();

                        Mail::to($record->email)->send(new InscriptionAccepted($record));
                    })
                    ->requiresConfirmation()
                    ->color('success'),
                Action::make('reject')
                    ->label('Rejeter')
                    ->icon('heroicon-o-x-circle')
                    ->action(function (Inscription $record) {
                        $record->status = 'rejected';
                        $record->save();

                        Mail::to($record->email)->send(new InscriptionRejected($record));
                    })
                    ->requiresConfirmation()
                    ->color('danger'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
