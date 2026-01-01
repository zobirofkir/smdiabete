<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbstractFormResource\Pages;
use App\Models\AbstractForm;
use App\Mail\AbstractStatusMail;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Actions\Action;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Mail;

class AbstractFormResource extends Resource
{
    protected static ?string $model = AbstractForm::class;
    protected static ?string $navigationGroup = 'Abstract';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $modelLabel = 'Abstract';
    protected static ?string $pluralModelLabel = 'Abstracts';

    public static function form(Form $form): Form
    {
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reference')
                    ->label('Référence')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('prenom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('abstract_titre')
                    ->label('Titre')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('presentation_type')
                    ->label('Type')
                    ->badge()
                    ->colors([
                        'oral' => 'success',
                        'poster' => 'warning',
                    ])
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'oral' => 'Communication orale',
                        'poster' => 'Poster',
                        default => $state,
                    }),
                Tables\Columns\TextColumn::make('statut')
                    ->badge()
                    ->colors([
                        'soumis' => 'secondary',
                        'accepte' => 'success',
                        'refuse' => 'danger',
                        'en_attente' => 'warning',
                    ]),
                Tables\Columns\TextColumn::make('date_soumission')
                    ->label('Date soumission')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
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
        return $infolist->schema([
            Actions::make([
                Action::make('accepter')
                    ->label('Accepter')
                    ->color('success')
                    ->icon('heroicon-o-check-circle')
                    ->requiresConfirmation()
                    ->action(function (AbstractForm $record) {
                        $record->statut = 'accepte';
                        $record->save();
                        
                        Mail::to($record->email)->send(new AbstractStatusMail($record, 'accepte'));
                    }),
                    
                Action::make('refuser')
                    ->label('Refuser')
                    ->color('danger')
                    ->icon('heroicon-o-x-circle')
                    ->requiresConfirmation()
                    ->action(function (AbstractForm $record) {
                        $record->statut = 'refuse';
                        $record->save();
                        
                        Mail::to($record->email)->send(new AbstractStatusMail($record, 'refuse'));
                    }),
            ]),
            
            TextEntry::make('reference')
                ->label('Référence')
                ->inlineLabel()
                ->badge()
                ->color('primary'),
            
            TextEntry::make('nom')
                ->label('Nom')
                ->inlineLabel()
                ->badge()
                ->color('primary'),
            
            TextEntry::make('prenom')
                ->label('Prénom')
                ->inlineLabel()
                ->badge()
                ->color('primary'),
            
            TextEntry::make('titre')
                ->label('Titre')
                ->inlineLabel()
                ->badge()
                ->color('secondary'),
            
            TextEntry::make('email')
                ->inlineLabel()
                ->badge()
                ->color('secondary'),
            
            TextEntry::make('telephone')
                ->label('Téléphone')
                ->inlineLabel()
                ->badge()
                ->color('secondary'),
            
            TextEntry::make('institution')
                ->inlineLabel()
                ->badge()
                ->color('info'),
            
            TextEntry::make('ville')
                ->inlineLabel()
                ->badge()
                ->color('info'),
            
            TextEntry::make('pays')
                ->inlineLabel()
                ->badge()
                ->color('info'),
            
            TextEntry::make('abstract_titre')
                ->label('Titre de l\'abstract')
                ->inlineLabel()
                ->badge()
                ->color('warning'),
            
            TextEntry::make('presentation_type')
                ->label('Type de présentation')
                ->inlineLabel()
                ->badge()
                ->color(fn ($state) => match ($state) {
                    'oral' => 'success',
                    'poster' => 'warning',
                    default => 'secondary',
                })
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    'oral' => 'Communication orale',
                    'poster' => 'Poster',
                    default => $state,
                }),
            
            TextEntry::make('langue')
                ->inlineLabel()
                ->badge()
                ->color('secondary')
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    'francais' => 'Français',
                    'anglais' => 'Anglais',
                    default => $state,
                }),
            
            TextEntry::make('statut')
                ->inlineLabel()
                ->badge()
                ->color(fn ($state) => match ($state) {
                    'soumis' => 'secondary',
                    'accepte' => 'success',
                    'refuse' => 'danger',
                    'en_attente' => 'warning',
                    default => 'secondary',
                }),
            
            TextEntry::make('date_soumission')
                ->label('Date de soumission')
                ->inlineLabel()
                ->badge()
                ->color('secondary')
                ->formatStateUsing(fn ($state) => $state?->format('d/m/Y H:i')),
            
            TextEntry::make('introduction')
                ->inlineLabel()
                ->badge()
                ->color('gray')
                ->limit(100),
            
            TextEntry::make('objectifs')
                ->inlineLabel()
                ->badge()
                ->color('gray')
                ->limit(100),
            
            TextEntry::make('methodes')
                ->label('Méthodes')
                ->inlineLabel()
                ->badge()
                ->color('gray')
                ->limit(100),
            
            TextEntry::make('resultats')
                ->label('Résultats')
                ->inlineLabel()
                ->badge()
                ->color('gray')
                ->limit(100),
            
            TextEntry::make('conclusion')
                ->inlineLabel()
                ->badge()
                ->color('gray')
                ->limit(100),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbstractForms::route('/'),
            'view' => Pages\ViewAbstractForm::route('/{record}'),
        ];
    }
}
