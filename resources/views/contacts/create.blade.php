<!DOCTYPE html>
<html>
<head>
    <title>Ajout d'un contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h1>Ajouter un contact</h1>


    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="{{ route('contacts.store') }}" method="post">
                    <div class="form-group">
                        <label for="Nom">Nom du contact</label>
                        <input type="text" name="Nom" id="Nom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Prenom">Prénom du contact</label>
                        <input type="text" name="Prenom" id="Prenom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Mail">Adresse mail du contact</label>
                        <input type="Mail" name="Mail" id="Adresse" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Numero">Numéro du contact</label>
                        <input type="text" name="Numero" id="Numero" class="form-control" required>
                    </div>
                    <div class="field">
                        <label class="label">Entreprise</label>
                        <div class="select">
                            <select name="entreprise_id">
                                @foreach($entreprises as $entreprise)
                                    <option value="{{ $entreprise->id }}">{{ $entreprise->Nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    @csrf()
                    <input type="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

</body>
</html>