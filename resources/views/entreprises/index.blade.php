<!DOCTYPE html>
<html>
<head>
	<title>Index des Entreprises</title>
</head>
<body>
    <h1>Index des Entreprises</h1>

    <a href="{{ route('entreprises.create') }}" title="Ajouter une entreprise">Ajouter une entreprise</a>

    <ul>
        @foreach($entreprises as $entreprise)
        <li>
            <a href="{{ route('entreprises.show', $entreprise->id) }}" title="{{ $entreprise->Nom }}">{{ $entreprise->Nom }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>