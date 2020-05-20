<!DOCTYPE html>
<html>
<head>
    <title>Modification d'un contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h1>Modifier une contact</h1>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="{{ route('contacts.update',['contact' => $contact]) }}" method="POST">
                    <div class="form-group">
                        <label for="Nom">Nom du contact</label>
                        <input type="text" name="Nom" id="Nom" class="form-control" required value="{{ $contact['Nom'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Prenom">Prénom du contact</label>
                        <input type="text" name="Prenom" id="Prenom" class="form-control" required value="{{ $contact['Prenom'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Mail">Mail du contact</label>
                        <input type="text" name="Mail" id="Mail" class="form-control" required value="{{ $contact['Mail'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Numero">Numéro du contact</label>
                        <input type="text" id="Numero" name="Numero" class="form-control" required value="{{ $contact['Numero'] }}">
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