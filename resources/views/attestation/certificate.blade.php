<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Attestation de {{ $attestation->nom }} {{ $attestation->prenom }}</title>
    <style>
        @page {
            margin: 40px 60px;
        }
        body {
            font-family: 'Merriweather', Georgia, serif;
            color: #2c3e50;
            background: #fff;
            padding: 40px 60px;
            border: 12px solid #0a3d62; /* Dark navy border */
            box-sizing: border-box;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        .certificate-container {
            border: 6px solid #0984e3; /* bright blue inner border */
            padding: 50px 60px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            box-sizing: border-box;
            background: #f9fbfd;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        header {
            text-align: center;
            margin-bottom: 50px;
        }

        header h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 54px;
            color: #0984e3;
            letter-spacing: 3px;
            margin: 0;
            font-weight: 900;
            text-transform: uppercase;
            border-bottom: 5px solid #0984e3;
            padding-bottom: 12px;
        }

        header .company-name {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            color: #636e72;
            margin-top: 6px;
            letter-spacing: 2px;
            font-weight: 600;
        }

        .recipient {
            font-size: 26px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 35px;
            color: #2d3436;
        }

        .details {
            max-width: 650px;
            margin: 0 auto 50px;
            font-size: 20px;
            line-height: 1.75;
            color: #2d3436;
        }

        .details p {
            margin: 14px 0;
        }

        .content {
            font-size: 22px;
            font-style: italic;
            text-align: center;
            max-width: 720px;
            margin: 0 auto 70px;
            color: #636e72;
        }

        footer {
            text-align: center;
            font-size: 16px;
            color: #b2bec3;
            font-style: normal;
            letter-spacing: 1px;
            margin-bottom: 40px;
        }

        .signature {
            max-width: 720px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            padding-top: 30px;
            border-top: 2px solid #dfe6e9;
        }

        .signature div {
            width: 220px;
            text-align: center;
            font-size: 16px;
            color: #636e72;
            font-weight: 600;
            border-top: 1.5px solid #636e72;
            padding-top: 8px;
        }

        /* Responsive print optimizations */
        @media print {
            body {
                border: none;
                padding: 0;
                margin: 0;
                box-shadow: none;
            }
            .certificate-container {
                border: none;
                padding: 0;
                box-shadow: none;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat:wght@600;900&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="certificate-container">
        <header>
            <h1>Attestation</h1>
            <div class="company-name">SMDiabete Société</div>
        </header>

        <div class="recipient">
            {{ $attestation->nom }} {{ $attestation->prenom }}
        </div>

        <div class="details">
            <p><strong>Type d’attestation :</strong>
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
            <p><strong>Date :</strong> {{ $attestation->created_at->format('d/m/Y') }}</p>
        </div>

        <div class="content">
            Ceci est pour certifier que <strong>{{ $attestation->nom }} {{ $attestation->prenom }}</strong> a reçu la présente attestation délivrée par la société <strong>SMDiabete</strong>.
        </div>

        <footer>
            &copy; {{ date('Y') }} SMDiabete Société - Tous droits réservés
        </footer>

        <div class="signature">
            <div>Signature du responsable</div>
            <div>Signature du bénéficiaire</div>
        </div>
    </div>
</body>
</html>
