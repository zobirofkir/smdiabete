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
        <h2>Confirmation de réception de votre Communication</h2>
        <p>Cher <span class="highlight">{{ $lastname }}</span>,</p>

        <p>
            Nous vous informons que nous avons bien reçu votre Communication, intitulé: {{ $firstname }}
        </p>

        <p>pour le prochain Congrès National de Diabétologie, <span class="highlight"> Tanger 2025 </span> et nous tenons à vous remercier pour votre contribution .</p>


        <p>Cordialement,</p>

        <p class="signature">Comité d'organisation du Congrès National de Diabétologie</p>
    </div>
</body>
</html>
