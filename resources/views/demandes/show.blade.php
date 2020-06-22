<!DOCTYPE html>
<html>
<head>
    <title>Affichage d'une demande</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h1>{{ $demandes->Nom }}</h1>


    <div class="container">
        <div class="row">
            <div class="col-2 offset-10">
                <a href="{{ route('demandes.index') }}" class="btn btn-info">Retour a l'accueil</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Entreprise</th>
                        <th>Mail</th>
                        <th>Numéro</th>
                        <th>Date</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        <th>Entreprise</th>
                    </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{$demandes['Nom']}}</td>
                                <td>{{$demandes['Prenom']}}</td>
                                <td>{{$demandes['Entreprise']}}</td>
                                <td>{{$demandes['Mail']}}</td>
                                <td>{{$demandes['Numero']}}</td>
                                <td>{{$demandes['Date']}}</td>
                                <td> <a class="btn btn-warning" href="{{ route('demandes.edit', $demandes) }}">Modifier</a> </td>
                                <td> <a class="btn btn-danger" href="{{ route('demandes.destroy', $demandes) }}">Supprimer</a> </td>
                                <td> <a class="btn btn-success" href="{{ route('entreprises.index') }}">Entreprise</a> </td>
                            </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</body>
</html>