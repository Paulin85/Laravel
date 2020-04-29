<!DOCTYPE html>
<html>
<head>
	<title>Affichage d'une entreprise</title>
</head>
<body>
    <h1>Affichage d'une entreprise</h1>

    <a href="{{ route('entreprises.index') }}">Retour a l'accueil</a>
    <p>
    @if(!is_null($entreprise))
        {{ $entreprise->Nom }}
        {{ $entreprise->Domaine }}
        {{ $entreprise->Adresse }}
        {{ $entreprise->Numero }}
    </p>
    @else
        <p>La catégorie n'existe pas</p>
    @endif

</body>
</html>