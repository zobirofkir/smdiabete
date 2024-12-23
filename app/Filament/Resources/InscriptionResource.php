<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InscriptionResource\Pages;
use App\Filament\Resources\InscriptionResource\RelationManagers;
use App\Models\Inscription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                Tables\Columns\TextColumn::make('firstname')->label('First Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('lastname')->label('Last Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('ville')->label('City')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('secteur')->label('Sector')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('phone')->label('Phone')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
                Tables\Columns\TextColumn::make('adresse')->label('Address')->searchable(),
                Tables\Columns\TextColumn::make('objectif')->label('Objective')->searchable(),
            ])
            ->filters([
                // Add any filters if necessary
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


    public static function getRelations(): array
    {
        return [
            // Define any relations if necessary
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInscriptions::route('/'),
        ];
    }
}
