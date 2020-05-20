<!DOCTYPE html>
<html>
<head>
	<title>Affichage d'une entreprise</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h1>{{ $entreprise->Nom }}</h1>


    <div class="container">
        <div class="row">
            <div class="col-2 offset-10">
                <a href="{{ route('entreprises.index') }}" class="btn btn-info">Retour a l'accueil</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Domaine</th>
                        <th>Adresse</th>
                        <th>Numéro</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        <th>Contact</th>
                    </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{$entreprise['Nom']}}</td>
                                <td>{{$entreprise['Domaine']}}</td>
                                <td>{{$entreprise['Adresse']}}</td>
                                <td>{{$entreprise['Numero']}}</td>
                                <td> <a class="btn btn-warning" href="{{ route('entreprises.edit', $entreprise) }}">Modifier</a> </td>
                                <td> <a class="btn btn-danger" href="{{ route('entreprises.destroy', $entreprise) }}">Supprimer</a> </td>
                                <td> <a class="btn btn-success" href="{{ route('contacts.index') }}">Contact</a> </td>
                            </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</body>
</html>