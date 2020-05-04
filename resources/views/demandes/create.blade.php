<head>
	<title>Ajout d'une demande</title>
</head>
<body>
    <h1>Ajouter une demande</h1>

    <form method="POST" action="{{ route('demandes.store') }}">

        @csrf

        <label for="Nom">Nom de la demande:</label>
        <input id="Nom" type="text" name="Nom">

        <label for="Date">Date de la demande:</label>
        <input id="Date" type="text" name="Date">

        <label for="Numero">Numéro de Téléphone de la demande:</label>
        <input id="Numero" type="text" name="Numero">

        <input type="submit">
    </form>

</body>
</html>