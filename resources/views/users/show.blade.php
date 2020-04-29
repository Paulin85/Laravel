<!DOCTYPE html>
<html>
<head>
	<title>Utilisateur</title>
</head>
<body>
    <h1>Compte de l'utilisateur</h1>

    <a href="{{ route('entreprises.index') }}">Retour a l'accueil</a>
    <p>
    @if(!is_null($user))
        {{ $user->name }}
        {{ $user->email }}
    </p>
    @else
        <p>L'utilisateur n'existe pas</p>
    @endif

</body>
</html>