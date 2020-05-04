<!DOCTYPE html>
<html>
<head>
	<title>Affichage d'une demande</title>
</head>
<body>
    <h1>Affichage d'une demande</h1>

    <a href="{{ route('demandes.index') }}">Retour a l'accueil</a>
    <p>
    @if(!is_null($entreprise))
        {{ $demandes->Nom }}
        {{ $demandes->Domaine }}
        {{ $demandes->Adresse }}
        {{ $demandes->Numero }}
    </p>
    @else
        <p>La catégorie n'existe pas</p>
    @endif

</body>
</html>