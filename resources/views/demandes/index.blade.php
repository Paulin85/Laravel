

<!DOCTYPE html>
<html>
<head>
	<title>Historique des Demandes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>


    <div class="cointainer">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-2 offset-10">
                        <a href="{{ route('demandes.create') }}" title="Ajouter une demande">Ajouter une Demande</a>
                    </div>
                </div>
                <h1 class="display-4">Historique des Demandes</h1>
                <p class="lead">


    <div class="row">
        <div class="col-8 offset-2">
            <table class="table">
                <thread>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Entreprise</th>
                        <th>Mail</th>
                        <th>Numéro</th>
                        <th>Date</th>
                        </tr>
                        </thread>
                        <tbody>
                        @foreach($demandes->sortBy('Date') as $demande)

                        <tr>
                            <td><a href="{{ route('demandes.show', $demande->id) }}" title="{{ $demande->Nom }}">{{ $demande->Nom }}</a>
                            
                            <td>{{$demande['Prenom']}}</td>
                                <td>{{$demande['Entreprise']}}</td>
                                <td>{{$demande['Mail']}}</td>
                                <td>{{$demande['Numero']}}</td>
                                <td>{{$demande['Date']}}</td>
                            <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    
                        </table>
                </p>
        </div>
        </div>
            </div>
        </div>
    </div>
</body>
</html>
