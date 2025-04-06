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
        .content {
            background-color: #fff5f5;
            padding: 25px;
            border-radius: 5px;
            border: 1px solid #ffd6d6;
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
        <p class="message">Nous regrettons de vous informer que votre inscription a été refusée.</p>
        <p class="signature">Merci de votre compréhension.</p>
    </div>
</body>
</html>
