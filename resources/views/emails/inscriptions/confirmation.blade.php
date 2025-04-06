<!DOCTYPE html>
<html>
<head>
    <title>Confirmation d'inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .content {
            background-color: #f0f9ff;
            padding: 25px;
            border-radius: 5px;
            border: 1px solid #d1e7ff;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333333;
        }
        .message {
            margin-bottom: 20px;
            color: #666666;
        }
        .highlight {
            color: #0066cc;
            font-weight: bold;
        }
        .signature {
            margin-top: 30px;
            font-style: italic;
            color: #666666;
        }
    </style>
</head>
<body>
    <div class="content">
        <p class="greeting">Bonjour {{ $inscription->firstname }},</p>

        <p class="message">Votre demande d'inscription au 2<sup>ème</sup> congrès de la SMD est enregistrée.</p>

        <p class="message">Vous allez recevoir une confirmation d'inscription dès réception de la confirmation de prise en charge de la part du laboratoire.</p>

        <p class="message">Pour toute autre information, veuillez envoyer un message au numéro WhatsApp du comité d'organisation : <span class="highlight">0762011226</span>.</p>

        <p class="message">Au plaisir de vous rencontrer à Tanger.</p>

        <p class="signature">À bientôt.</p>
    </div>
</body>
</html>
