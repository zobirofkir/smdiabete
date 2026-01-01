<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Statut de votre abstract</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: {{ $status === 'accepte' ? '#10b981' : '#ef4444' }};">
            @if($status === 'accepte')
                Félicitations ! Votre abstract a été accepté
            @else
                Votre abstract a été refusé
            @endif
        </h2>
        
        <p>Bonjour {{ $abstract->titre }} {{ $abstract->nom }} {{ $abstract->prenom }},</p>
        
        @if($status === 'accepte')
            <p>Nous avons le plaisir de vous informer que votre abstract intitulé "<strong>{{ $abstract->abstract_titre }}</strong>" a été accepté pour présentation.</p>
            <p>Vous recevrez prochainement des informations complémentaires concernant les modalités de présentation.</p>
        @else
            <p>Nous regrettons de vous informer que votre abstract intitulé "<strong>{{ $abstract->abstract_titre }}</strong>" n'a pas été retenu pour cette édition.</p>
            <p>Nous vous remercions pour votre participation et espérons vous retrouver lors de nos prochains événements.</p>
        @endif
        
        <p>Référence : {{ $abstract->reference }}</p>
        
        <p>Cordialement,<br>
        L'équipe organisatrice</p>
    </div>
</body>
</html>