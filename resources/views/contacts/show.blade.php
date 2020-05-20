<!DOCTYPE html>
<html>
<head>
    <title>Affichage d'un contact</title>
</head>
<body>
    <h1>Affichage d'un contact</h1>

    <a href="{{ route('contacts.index') }}">Retour a l'accueil</a>
    <p>
    @if(!is_null($contact))
        {{ $contact->Nom }}
        {{ $contact->Prenom }}

        {{ $contact->Mail }}
        {{ $contact->Numero }}
        {{ $contact->Entreprise }}

    </p>
    @else
        <p>La catégorie n'existe pas</p>
    @endif

    <td><a href ="{{ route('contacts.destroy', $contact->id) }}">Delete</a></td>


</body>
</html>