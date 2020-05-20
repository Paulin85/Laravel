<!DOCTYPE html>
<html>
<head>
	<title>Index des Demandes</title>
</head>
<body>
    <h1>Index des Demandes</h1>

    <a href="{{ route('demandes.create') }}" title="Ajouter une demande">Ajouter une Demande</a>

    <ul>
        @foreach($demandes as $demandes)
        <li>
            <a href="{{ route('demandes.show', $demandes->id) }}" title="{{ $demandes->Nom }}">{{ $demandes->Nom }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>