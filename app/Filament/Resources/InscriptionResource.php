<?php

namespace App\Filament\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;
use App\Filament\Resources\InscriptionResource\Pages;
use App\Mail\InscriptionAccepted;
use App\Mail\InscriptionRejected;
use App\Models\Inscription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Mail;
use Filament\Tables\Filters\SelectFilter;

class InscriptionResource extends Resource
{
    protected static ?string $model = Inscription::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Inscriptions';

    public static function form(Form $form): Form
    {
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                self::createTextColumn('firstname', 'Prénom'),
                self::createTextColumn('lastname', 'Nom'),
                self::createTextColumn('phone', 'Téléphone'),
                self::createTextColumn('email', 'Email'),
                self::createTextColumn('secteur', 'Secteur'),
                self::createTextColumn('type', 'Type'),
                self::createTextColumn('specialite', 'Spécialité'),
                self::createTextColumn('other_specialite', 'Autre Spécialité'),
                self::createTextColumn('ville', 'Ville'),
                self::createTextColumn('attendance_status', 'Statut de présence'),
                self::createTextColumn('laboratoire', 'Laboratoire'),
                self::createTextColumn('other_laboratoire', 'Autre Laboratoire'),
                self::createTextColumn('laboratoire_status', 'Statut du laboratoire'),
                self::createTextColumn('sex', 'Sexe'),
                self::createTextColumn('departure_date', 'Date de départ'),
                self::createTextColumn('arrival_date', "Date d'arrivée"),
                self::createTextColumn('payment_method', 'Méthode de paiement'),
                self::createTextColumn('rib_pdf_path', 'RIB PDF'),
                self::createStatusColumn(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('ville')
                    ->label('Filtrer par ville')
                    ->options(fn () => Inscription::query()
                        ->select('ville')
                        ->distinct()
                        ->orderBy('ville')
                        ->pluck('ville', 'ville')
                        ->filter()
                    ),
            ])
            ->actions([
                self::createViewAction(),
                self::createAcceptAction(),
                self::createRejectAction(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                \AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction::make('export')
                    ->label('Exporter les sélectionnés')
                    ->fileName('inscriptions_selectionnées')
                    ->withColumns([
                        TextColumn::make('firstname')->label('Prénom'),
                        TextColumn::make('lastname')->label('Nom'),
                        TextColumn::make('phone')->label('Téléphone'),
                        TextColumn::make('email')->label('Email'),
                        TextColumn::make('secteur')->label('Secteur'),
                        TextColumn::make('type')->label('Type'),
                        TextColumn::make('specialite')->label('Spécialité'),
                        TextColumn::make('other_specialite')->label('Autre Spécialité'),
                        TextColumn::make('ville')->label('Ville'),
                        TextColumn::make('attendance_status')->label('Statut de présence'),
                        TextColumn::make('laboratoire')->label('Laboratoire'),
                        TextColumn::make('other_laboratoire')->label('Autre Laboratoire'),
                        TextColumn::make('laboratoire_status')->label('Statut du laboratoire'),
                        TextColumn::make('sex')->label('Sexe'),
                        TextColumn::make('departure_date')->label('Date de départ'),
                        TextColumn::make('arrival_date')->label("Date d'arrivée"),
                        TextColumn::make('payment_method')->label('Méthode de paiement'),
                        TextColumn::make('rib_pdf_path')->label('RIB PDF'),
                        TextColumn::make('status')->label('Statut'),
                    ]),
            ]);
        }

    public static function infolist(Infolist $infolist): Infolist
    {
        $record = $infolist->record;

        return $infolist->schema([
            self::createTextEntry('Prénom:', $record->firstname),
            self::createTextEntry('Nom:', $record->lastname),
            self::createTextEntry('Téléphone:', $record->phone),
            self::createTextEntry('Email:', $record->email),
            self::createTextEntry('Secteur:', $record->secteur),
            self::createTextEntry('Type:', $record->type),
            self::createTextEntry('Spécialité:', $record->specialite),
            self::createTextEntry('Autre Spécialité:', $record->other_specialite),
            self::createTextEntry('Ville:', $record->ville),
            self::createTextEntry('Statut de présence:', $record->attendance_status),
            self::createTextEntry('Laboratoire:', $record->laboratoire),
            self::createTextEntry('Autre Laboratoire:', $record->other_laboratoire),
            self::createTextEntry('Statut du laboratoire:', $record->laboratoire_status),
            self::createTextEntry('Sexe:', $record->sex),
            self::createTextEntry('Date de départ:', $record->departure_date),
            self::createTextEntry("Date d'arrivée:", $record->arrival_date),
            self::createTextEntry('Méthode de paiement:', $record->payment_method),
            self::createTextEntry('RIB PDF:', $record->rib_pdf_path),
            self::createStatusEntry($record),
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
            'view' => Pages\ViewInscription::route('/{record}'),
        ];
    }

    // Helper methods for table columns
    private static function createTextColumn(string $name, string $label): TextColumn
    {
        return TextColumn::make($name)
            ->label($label)
            ->sortable()
            ->searchable();
    }

    private static function createStatusColumn(): TextColumn
    {
        return TextColumn::make('status')
            ->label('Statut')
            ->formatStateUsing(fn ($state) => match ($state) {
                'pending' => 'En attente',
                'accepted' => 'Accepté',
                'refused' => 'Rejeté',
                default => 'Inconnu',
            })
            ->color(fn ($state) => match ($state) {
                'pending' => 'warning',
                'accepted' => 'success',
                'refused' => 'danger',
                default => 'muted',
            })
            ->sortable()
            ->searchable();
    }

    // Helper methods for table actions
    private static function createViewAction(): Tables\Actions\ViewAction
    {
        return Tables\Actions\ViewAction::make()
            ->label('Voir')
            ->icon('heroicon-o-eye')
            ->color('primary')
            ->tooltip('Voir les détails')
            ->size('sm')
            ->extraAttributes([
                'class' => 'font-semibold text-white hover:text-gray-800 hover:bg-primary-600 border border-transparent rounded-md shadow-sm transition-all duration-200'
            ])
            ->requiresConfirmation();
    }

    private static function createAcceptAction(): Action
    {
        return Action::make('accept')
            ->label('Accepter')
            ->icon('heroicon-o-check')
            ->action(function (Inscription $record) {
                $record->status = 'accepted';
                $record->save();
                Mail::mailer('smtp')
                    ->to($record->email)
                    ->send(new InscriptionAccepted($record, 'contact@smdiabete.org'));
            })
            ->requiresConfirmation()
            ->color('success');
    }

    private static function createRejectAction(): Action
    {
        return Action::make('reject')
            ->label('Rejeter')
            ->icon('heroicon-o-x-circle')
            ->action(function (Inscription $record) {
                $record->status = 'refused';
                $record->save();
                Mail::mailer('smtp')
                    ->to($record->email)
                    ->send(new InscriptionRejected($record, 'contact@smdiabete.org'));
            })
            ->requiresConfirmation()
            ->color('danger');
    }

    private static function createTextEntry(string $label, mixed $value): TextEntry
    {
        return TextEntry::make($label)
            ->default($value)
            ->inlineLabel()
            ->badge();
    }

    private static function createStatusEntry(Inscription $record): TextEntry
    {
        $statusStyle = match ($record->status) {
            'pending' => 'warning',
            'accepted' => 'success',
            'refused' => 'danger',
            default => 'secondary',
        };

        return TextEntry::make('Statut:')
            ->default($record->status)
            ->inlineLabel()
            ->badge()
            ->color($statusStyle);
    }
}
