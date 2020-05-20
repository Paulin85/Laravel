<!DOCTYPE html>
<html>
<head>
	<title>Index des Entreprises</title>
</head>
<body>
    <h1>Index des Entreprises</h1>

    <a href="{{ route('entreprises.create') }}" title="Ajouter une entreprise">Ajouter une entreprise</a>

    <ul>
        @foreach($entreprises as $entreprises)
        <li>
            <a href="{{ route('entreprises.show', $entreprises->id) }}" title="{{ $entreprises->Nom }}">{{ $entreprises->Nom }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>