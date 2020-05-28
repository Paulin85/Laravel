<!DOCTYPE html>
<html>
<head>
    <title>Affichage d'un contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h1>{{ $contact->Nom }}</h1>


    <div class="container">
        <div class="row">
            <div class="col-2 offset-10">
                <a href="{{ route('contacts.index') }}" class="btn btn-info">Retour a l'accueil</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Mail</th>
                        <th>Numéro</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        <th>Entreprise</th>
                    </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{$contact['Nom']}}</td>
                                <td>{{$contact['Prenom']}}</td>
                                <td>{{$contact['Mail']}}</td>
                                <td>{{$contact['Numero']}}</td>
                                <td> <a class="btn btn-warning" href="{{ route('contacts.edit', $contact) }}">Modifier</a> </td>
                                <td> <a class="btn btn-danger" href="{{ route('contacts.destroy', $contact) }}">Supprimer</a> </td>
                                <td> {{ $entreprise }} </td>
                            </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</body>
</html>
