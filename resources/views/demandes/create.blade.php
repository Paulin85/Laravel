<head>
	<title>Ajout d'une demande</title>
</head>
<body>
    <h1>Ajouter une demande</h1>

    <form method="POST" action="{{ route('entreprises.store') }}">

        @csrf

        <label for="Nom">Nom de la demande:</label>
        <input id="Nom" type="text" name="Nom">

        <label for="Domaine">Domaine de Travail de la demande:</label>
        <input id="Domaine" type="text" name="Domaine">

        <label for="Adresse">Adresse de la demande:</label>
        <input id="Adresse" type="text" name="Adresse">

        <label for="Numero">Numéro de Téléphone de la demande:</label>
        <input id="Numero" type="text" name="Numero">

        <input type="submit">
    </form>

</body>
</html>