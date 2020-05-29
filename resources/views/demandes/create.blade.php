<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une demande</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h1>Ajouter une demande</h1>


    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="{{ route('demandes.store') }}" method="post">
                    <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" name="Nom" id="Nom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Prenom">Prénom</label>
                        <input type="text" name="Prenom" id="Prenom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Enreprise">Entreprise</label>
                        <input type="text" name="Entreprise" id="Entreprise" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Mail">Adresse mail</label>
                        <input type="Mail" name="Mail" id="Adresse" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Numero">Numéro de Téléphone</label>
                        <input type="text" name="Numero" id="Numero" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Date">Date</label>
                        <input type="text" name="Date" id="Date" class="form-control" required>
                    </div>
                    @csrf()
                    <input type="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

</body>
</html>