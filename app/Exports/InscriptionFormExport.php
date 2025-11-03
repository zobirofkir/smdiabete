<?php

namespace App\Exports;

use App\Models\InscriptionForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class InscriptionFormExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return InscriptionForm::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nom',
            'Prénom',
            'Email',
            'Téléphone',
            'Statut',
            'Date de création',
        ];
    }

    public function map($inscriptionForm): array
    {
        return [
            $inscriptionForm->id,
            $inscriptionForm->nom,
            $inscriptionForm->prenom,
            $inscriptionForm->mail,
            $inscriptionForm->telephone,
            $inscriptionForm->statut,
            $inscriptionForm->created_at->format('d/m/Y H:i'),
        ];
    }
}