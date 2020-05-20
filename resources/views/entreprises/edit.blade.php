<!DOCTYPE html>
<html>
<head>
	<title>Modification d'une entreprise</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <h1>Modifier une entreprise</h1>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="{{ route('entreprises.update',['entreprise' => $entreprise]) }}" method="POST">
                    <div class="form-group">
                        <label for="Nom">Nom de l'entreprise</label>
                        <input type="text" name="Nom" id="Nom" class="form-control" required value="{{ $entreprise['Nom'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Domaine">Domaine de l'entreprise</label>
                        <input type="text" name="Domaine" id="Domaine" class="form-control" required value="{{ $entreprise['Domaine'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Adresse">Adresse de l'entreprise</label>
                        <input type="text" name="Adresse" id="Adresse" class="form-control" required value="{{ $entreprise['Adresse'] }}">
                    </div>
                    <div class="form-group">
                        <label for="Numero">Numéro de l'entreprise</label>
                        <input type="text" id="Numero" name="Numero" class="form-control" required value="{{ $entreprise['Numero'] }}">
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