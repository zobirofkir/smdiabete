<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InscriptionResource\Pages;
use App\Mail\InscriptionAccepted;
use App\Mail\InscriptionRejected;
use App\Models\Inscription;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
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
                //
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
                TextColumn::make('other_specialite')
                    ->label('Autre Specialité'),
                TextColumn::make('ville')
                    ->label('Ville'),
                TextColumn::make('departure_date')
                    ->label('Date de départ'),
                TextColumn::make('payment_method')
                    ->label('Méthode de paiement'),
                TextColumn::make('laboratoire')
                    ->label('Laboratoire'),
                TextColumn::make('other_laboratoire')
                    ->label('Autre Aboratoire'),
                TextColumn::make('laboratoire_status')
                    ->label('Statut du laboratoire'),
                TextColumn::make('rib_pdf_path')
                    ->label('Télécharger le RIB')
                    ->formatStateUsing(function ($state) {
                        if ($state) {
                            return '<a href="'.asset('storage/'.$state).'" target="_blank" class="text-indigo-600 hover:text-indigo-900">Télécharger</a>';
                        }

                        return '<span class="text-gray-500">Aucun fichier</span>';
                    })
                    ->html()
                    ->sortable()
                    ->searchable(),

                    TextColumn::make('status')
                    ->label('Statut')
                    ->formatStateUsing(function ($state) {
                        switch ($state) {
                            case 'pending':
                                return 'En attente';
                            case 'accepted':
                                return 'Accepté';
                            case 'refused':
                                return 'Rejeté';
                            default:
                                return 'Inconnu';
                        }
                    })
                    ->color(function ($state) {
                        switch ($state) {
                            case 'pending':
                                return 'warning';
                            case 'accepted':
                                return 'success';
                            case 'refused':
                                return 'danger';
                            default:
                                return 'muted';
                        }
                    })
                    ->sortable()
                    ->searchable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\ViewAction::make()
                ->label('Voir')
                ->icon('heroicon-o-eye')
                ->color('primary')
                ->tooltip('Voir les détails')
                ->size('sm')
                ->extraAttributes([
                    'class' => 'font-semibold text-white hover:text-gray-800 hover:bg-primary-600 border border-transparent rounded-md shadow-sm transition-all duration-200'
                ])
                ->requiresConfirmation(),


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
                        $record->status = 'refused';
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

    public static function infolist(Infolist $infolist): Infolist
    {
        $schema = [];
        $record = $infolist->record;

        $schema[] = TextEntry::make('Prénom:')
            ->default($record->firstname)
            ->inlineLabel()
            ->badge();

        $schema[] = TextEntry::make('Nom:')
            ->default($record->lastname)
            ->inlineLabel()
            ->badge();

        $schema[] = TextEntry::make('Téléphone:')
            ->default($record->phone)
            ->inlineLabel()
            ->badge();

        $schema[] = TextEntry::make('Email:')
            ->default($record->email)
            ->inlineLabel()
            ->badge();

        $schema[] = TextEntry::make('Secteur:')
            ->default($record->secteur)
            ->inlineLabel()
            ->badge();

        $schema[] = TextEntry::make('Type:')
            ->default($record->type)
            ->inlineLabel()
            ->badge();

        $schema[] = TextEntry::make('Spécialité:')
            ->default($record->specialite)
            ->inlineLabel();

        $schema[] = TextEntry::make('Autre Spécialité:')
            ->default($record->other_specialite)
            ->inlineLabel();

        $schema[] = TextEntry::make('Ville:')
            ->default($record->ville)
            ->inlineLabel();

        $schema[] = TextEntry::make('Date de départ:')
            ->default($record->departure_date)
            ->inlineLabel()
            ->badge();

        $schema[] = TextEntry::make('Méthode de paiement:')
            ->default($record->payment_method)
            ->inlineLabel()
            ->badge();

        $schema[] = TextEntry::make('Laboratoire:')
            ->default($record->laboratoire)
            ->inlineLabel();

        $schema[] = TextEntry::make('Autre Laboratoire:')
            ->default($record->other_laboratoire)
            ->inlineLabel();

        $schema[] = TextEntry::make('Statut du laboratoire:')
            ->default($record->laboratoire_status)
            ->inlineLabel()
            ->badge();

        $schema[] = TextEntry::make('Télécharger le RIB')
            ->default($record->rib_pdf_path ? '<a href="' . asset('storage/' . $record->rib_pdf_path) . '" target="_blank" class="text-primary-600 hover:text-primary-900">Télécharger</a>' : 'Aucun fichier')
            ->inlineLabel()
            ->html();

        $statusStyle = match ($record->status) {
            'pending' => 'warning',
            'accepted' => 'success',
            'refused' => 'danger',
            default => 'secondary',
        };

        $schema[] = TextEntry::make('Statut:')
            ->default($record->status)
            ->inlineLabel()
            ->badge()
            ->color($statusStyle);

        return $infolist->schema($schema);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInscriptions::route('/'),
            'view' => Pages\ViewInscription::route('/{record}'),
        ];
    }
}
