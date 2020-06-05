<!DOCTYPE html>
<html>
<head>
    <title>Index des Contacts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h1>Index des Contacts</h1>

    <div class="select">
            <select onchange="window.location.href = this.value">
                <option value="{{ route('contacts.index') }}" @unless($Nom) selected @endunless>Toutes entreprises</option>
                @foreach($entreprises as $entreprise)
                    <option value="{{ route('contacts.entreprise', $entreprise->Nom) }}" {{ $Nom == $entreprise->Nom ? 'selected' : '' }}>{{ $entreprise->Nom }}</option>
                @endforeach
            </select>
        </div>


    <div class="container">
        <div class="row">
            <div class="col-2 offset-10">
                <a href="{{ route('contacts.create') }}" class="btn btn-info">Création d'un contact</a>
            </div>
            <div class="col-2 offset-10 mt-1">
                <a href="{{ route('entreprises.index') }}" class="btn btn-info">Liste des entreprises</a>
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
			<th>Entreprise</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)

                            <tr>
                                <td><a href="{{ route('contacts.show', $contact->id) }}" title="{{ $contact->Nom }}">{{$contact['Nom']}} </a></td>
                                <td>{{$contact['Prenom']}}</td>
                                <td>{{$contact['Mail']}}</td>
                                <td>{{$contact['Numero']}}</td>

                                @foreach($entreprises as $entreprise)
                                    @if($entreprise->id == $contact->entreprise_id)                                    
                                    <td>{{ $entreprise->Nom }}</td>                                        
                                    @endif 
                                @endforeach
                        @endforeach
                            </tr>
                    </tbody>

                </table>
                
            </div>
        </div>
    </div>


</body>
</html>