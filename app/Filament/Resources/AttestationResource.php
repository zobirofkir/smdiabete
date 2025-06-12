<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttestationResource\Pages;
use App\Models\Attestation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AttestationResource extends Resource
{
    protected static ?string $model = Attestation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Attestations';

    protected static ?string $modelLabel = 'Attestation';

    protected static ?string $pluralModelLabel = 'Attestations';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->label('Nom')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('prenom')
                    ->label('Prénom')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('attestation')
                    ->label('Type d’attestation')
                    ->required()
                    ->options([
                        'presence' => 'Attestation de présence',
                        'affichee' => 'Attestation de communication affichée',
                        'orale' => 'Attestation de communication orale',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('prenom')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('attestation')
                    ->label('Type')
                    ->sortable()
                    ->badge()
                    ->colors([
                        'primary' => 'presence',
                        'warning' => 'affichee',
                        'success' => 'orale',
                    ])
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'presence' => 'Présence',
                        'affichee' => 'Communication affichée',
                        'orale' => 'Communication orale',
                        default => $state,
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date de création')
                    ->dateTime('d/m/Y H:i'),
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
        $record = $infolist->record;

        /**
         * Map attestation code to human-readable label & badge color
         */
        $attestationLabels = [
            'presence' => 'Attestation de présence',
            'affichee' => 'Attestation de communication affichée',
            'orale' => 'Attestation de communication orale',
        ];

        $attestationColors = [
            'presence' => 'primary',
            'affichee' => 'warning',
            'orale' => 'success',
        ];

        $attestationLabel = $attestationLabels[$record->attestation] ?? $record->attestation;
        $attestationColor = $attestationColors[$record->attestation] ?? 'secondary';

        return $infolist->schema([
            TextEntry::make('Nom')
                ->default($record->nom)
                ->inlineLabel()
                ->badge()
                ->color('primary'),

            TextEntry::make('Prénom')
                ->default($record->prenom)
                ->inlineLabel()
                ->badge()
                ->color('primary'),

            TextEntry::make('Email')
                ->default($record->email)
                ->inlineLabel()
                ->badge()
                ->color('secondary'),

            TextEntry::make('Type d’attestation')
                ->default($attestationLabel)
                ->inlineLabel()
                ->badge()
                ->color($attestationColor),

            TextEntry::make('Date de création')
                ->default($record->created_at?->format('d/m/Y H:i'))
                ->inlineLabel()
                ->badge()
                ->color('secondary'),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAttestations::route('/'),
            'view' => Pages\ViewAttestation::route('/{record}'),
        ];
    }
}
