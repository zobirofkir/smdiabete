<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Attestation de {{ $attestation->nom }} {{ $attestation->prenom }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; padding: 30px; }
        h1 { text-align: center; }
        .content { margin-top: 50px; font-size: 18px; }
    </style>
</head>
<body>
    <h1>Attestation</h1>
    <p>Nom: {{ $attestation->nom }}</p>
    <p>Prénom: {{ $attestation->prenom }}</p>
    <p>Type d’attestation: 
        @switch($attestation->attestation)
            @case('presence')
                Attestation de présence
                @break
            @case('affichee')
                Attestation de communication affichée
                @break
            @case('orale')
                Attestation de communication orale
                @break
            @default
                {{ $attestation->attestation }}
        @endswitch
    </p>
    <p>Date: {{ $attestation->created_at->format('d/m/Y') }}</p>
    <div class="content">
        Ceci est pour certifier que {{ $attestation->nom }} {{ $attestation->prenom }} a reçu la présente attestation.
    </div>
</body>
</html>
