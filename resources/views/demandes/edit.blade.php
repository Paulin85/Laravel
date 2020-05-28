<!DOCTYPE html>
<html>
<head>
    <title>Modification d'un contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h1>Modifier une demande</h1>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="{{ route('demandes.update',['demande' => $demande]) }}" method="POST">
                    <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" name="Nom" id="Nom" class="form-control" required value="{{ $demande['Nom'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Prenom">Prénom</label>
                        <input type="text" name="Prenom" id="Prenom" class="form-control" required value="{{ $demande['Prenom'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Mail">Entreprise</label>
                        <input type="text" name="Entreprise" id="Entreprise" class="form-control" required value="{{ $demande['Mail'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Numero">Adresse Mail</label>
                        <input type="text" id="Mail" name="Mail" class="form-control" required value="{{ $demande['Numero'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Numero">Numéro de téléphone</label>
                        <input type="text" id="Numero" name="Numero" class="form-control" required value="{{ $demande['Date'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Numero">Date</label>
                        <input type="text" id="Date" name="Date" class="form-control" required value="{{ $demande['Date'] }}">
                    </div>
                    @method('PUT')
                    @csrf()
                    <input type="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

</body>
</html>