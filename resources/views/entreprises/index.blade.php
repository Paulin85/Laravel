<!DOCTYPE html>
<html>
<head>
	<title>Index des entreprises</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h1>Index des entreprises</h1>


    <div class="container">
        <div class="row">
            <div class="col-2 offset-10">
                <a href="{{ route('entreprises.create') }}" class="btn btn-info">Création d'une entreprise</a>
            </div>
            <div class="col-2 offset-10 mt-1">
                <a href="{{ route('contacts.index') }}" class="btn btn-info">Liste des contacts</a>
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
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($entreprises as $entreprises)

                            <tr>
                                <td><a href="{{ route('entreprises.show', $entreprises->id) }}" title="{{ $entreprises->Nom }}">{{$entreprises['Nom']}} </a></td>
                                <td>{{$entreprises['Domaine']}}</td>
                                <td>{{$entreprises['Adresse']}}</td>
                                <td>{{$entreprises['Numero']}}</td>
                                <td>
                                   <a class="btn btn-warning" href="{{ route('entreprises.edit', $entreprises) }}">Modifier</a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</body>
</html>