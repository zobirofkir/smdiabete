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
                    ->label('First Name'),
                Forms\Components\TextInput::make('lastname')
                    ->required()
                    ->label('Last Name'),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->label('Phone'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Email'),
                Forms\Components\TextInput::make('secteur')
                    ->label('Secteur'),
                Forms\Components\TextInput::make('type'),
                Forms\Components\TextInput::make('specialite')
                    ->label('Speciality'),
                Forms\Components\TextInput::make('ville')
                    ->label('City'),
                Forms\Components\TextInput::make('paye')
                    ->label('Country'),
                Forms\Components\Select::make('sex')
                    ->options([
                        'dr' => 'Dr',
                        'pr' => 'Pr'
                    ])
                    ->label('Gender'),
                Forms\Components\DatePicker::make('arrival_date')
                    ->label('Arrival Date'),
                Forms\Components\DatePicker::make('departure_date')
                    ->label('Departure Date'),
                Forms\Components\Select::make('payment_method')
                    ->options([
                        'laboratoire' => 'Laboratory',
                        'virement' => 'Virement',
                        'invite' => 'Invite',
                    ])
                    ->label('Payment Method'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firstname')
                    ->label('First Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('lastname')
                    ->label('Last Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('secteur')
                    ->label('Secteur'),
                TextColumn::make('type')
                    ->label('Type'),
                TextColumn::make('specialite')
                    ->label('Speciality'),
                TextColumn::make('ville')
                    ->label('City'),
                TextColumn::make('paye')
                    ->label('Country'),
                TextColumn::make('sex')
                    ->label('Gender'),
                TextColumn::make('arrival_date')
                    ->label('Arrival Date'),
                TextColumn::make('departure_date')
                    ->label('Departure Date'),
                TextColumn::make('payment_method')
                    ->label('Payment Method'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Action::make('accept')
                    ->label('Accept')
                    ->icon('heroicon-o-check')
                    ->action(function (Inscription $record) {
                        $record->status = 'accepted';
                        $record->save();

                        Mail::to($record->email)->send(new \App\Mail\InscriptionAccepted($record));
                    })
                    ->requiresConfirmation()
                    ->color('success'),
                Action::make('reject')
                    ->label('Reject')
                    ->icon('heroicon-o-x-circle')
                    ->action(function (Inscription $record) {
                        Mail::to($record->email)->send(new \App\Mail\InscriptionRejected($record));
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
