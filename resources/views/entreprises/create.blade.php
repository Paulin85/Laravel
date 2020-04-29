<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'une entreprise</title>
</head>
<body>
    <h1>Ajouter une entreprise</h1>

    <form method="POST" action="{{ route('entreprises.store') }}">

        @csrf

        <label for="Nom">Nom de l'entreprise:</label>
        <input id="Nom" type="text" name="Nom">

        <label for="Domaine">Domaine de Travail de l'entreprise:</label>
        <input id="Domaine" type="text" name="Domaine">

        <label for="Adresse">Adresse de l'entreprise:</label>
        <input id="Adresse" type="text" name="Adresse">

        <label for="Numero">Numéro de Téléphone de l'entreprise:</label>
        <input id="Numero" type="text" name="Numero">

        <input type="submit">
    </form>

</body>
</html>