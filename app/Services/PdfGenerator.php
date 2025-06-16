<?php

namespace App\Services;

use setasign\Fpdi\Fpdi;
use Illuminate\Support\Str;
use App\Models\Attestation;

class PdfGenerator
{
    public static function generate(Attestation $attestation): string
    {
        $pdf = new Fpdi();

        $templatePath = public_path('pdfs/modele Communication Affichée-2.pdf');
        $pdf->AddPage();
        $pdf->setSourceFile($templatePath);
        $tplIdx = $pdf->importPage(1);
        $pdf->useTemplate($tplIdx, 0, 0, 210);

        $pdf->SetFont('Helvetica', '', 12);
        $pdf->SetTextColor(0, 0, 0);

        $pdf->SetXY(65, 90);
        $pdf->Cell(0, 10, 'Dr. ' . $attestation->nom . ' ' . $attestation->prenom, 0, 1);

        if ($attestation->title) {
            $pdf->SetXY(75, 110);
            $pdf->MultiCell(120, 10, $attestation->title, 0);
        }

        $fileName = 'attestation_' . Str::slug($attestation->nom . '_' . $attestation->prenom) . '.pdf';
        $outputPath = storage_path("app/temp/{$fileName}");

        if (!is_dir(storage_path('app/temp'))) {
            mkdir(storage_path('app/temp'), 0755, true);
        }

        $pdf->Output($outputPath, 'F');

        return $outputPath;
    }
}
