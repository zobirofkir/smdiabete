<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message Success</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-purple-300">
    <div class="bg-purple-600 text-white p-8 rounded-2xl max-w-md text-center">
        <div class="flex justify-center mb-4">
            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <h1 class="text-2xl font-bold">Message success</h1>
        <p class="mt-2 text-gray-200">
            Votre dépôt d'<span class="text-red-300">apstract</span> a ét passé avec succès.<br>
            Pour déposer un autre abstract, cliquez sur Retour.
        </p>
        <a href="{{url('/abstract')}}" class="mt-6 inline-block bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition">
            Retour
        </a>
    </div>
</body>
</html>
