<!DOCTYPE html>
<html>
<head>
    <title>Inscription Refusée</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .content {
            background-color: #f9f9f9;
            padding: 25px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .message {
            margin-bottom: 20px;
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
        <p class="greeting">Cher/Chère {{ $firstname }} {{ $lastname }},</p>
        <p class="message">Nous vous confirmons votre inscription à la 3 ème Congrès National de Diabètologie , qui aura lieu le 26 Mars 2026, à L'hôtel ROYAL TULIP CITY CENTER TANGER.</p>
        <p class="signature">Equipe SMD.</p>
    </div>
</body>
</html>
