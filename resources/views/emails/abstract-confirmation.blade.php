<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #4A90E2;
        }
        p {
            line-height: 1.6;
            font-size: 16px;
            color: #333;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
            color: #777;
        }
        .highlight {
            color: #E94E77;
            font-weight: bold;
        }
        .signature {
            margin-top: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Notification de réception de résumé scientifique</h2>
        <p>Cher <span class="highlight">{{ $firstname }} {{ $lastname }}</span>,</p>

        <p>Nous vous informons que nous avons bien reçu votre résumé scientifique pour le prochain Congrès National de Diabétologie, Tanger 2025, et nous tenons à vous remercier pour votre contribution.</p>

        <p>La décision concernant l'acceptation de votre travail scientifique sera communiquée d'ici le <span class="highlight">08 Mai 2025</span>.</p>

        <p>En cas d'acceptation de votre travail, veuillez envoyer votre poster avant le <span class="highlight">15 Mai 2025</span> (date limite).</p>

        <p>Cordialement,</p>

        <p class="signature">Secrétariat de la Société Marocaine de Diabétologie</p>

        <div class="footer">
            <p>Merci de votre participation.</p>
        </div>
    </div>
</body>
</html>
