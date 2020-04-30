<!DOCTYPE html>
<html>
<head>
	<title>Index des Utilisateurs</title>
</head>
<body>
    <h1>Index des Utilisateurs</h1>

    L'affichage des utilisateurs se fera via la méthode show

    <ul>
        @foreach($users as $users)
        <li>
            <a href="{{ route('users.show', $users->id) }}" title="{{ $users->Name }}">{{ $users->Name }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>