<!DOCTYPE html>
<html>
<head>
    <title>Index des Contacts</title>
</head>
<body>
    <h1>Index des Contacts</h1>

    <a href="{{ route('contacts.create') }}" title="Contact">Contact</a>

    <ul>
        @foreach($contacts as $contact)
        <li>
            <a href="{{ route('contacts.show', $contact->id) }}" title="{{ $contact->Nom }}">{{ $contact->Nom }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>