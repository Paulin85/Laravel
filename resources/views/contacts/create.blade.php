<!DOCTYPE html>
<html>
<head>
    <title>Ajout d'un contact</title>
</head>
<body>
    <h1>Ajouter un contact</h1>

    <form method="POST" action="{{ route('contacts.store') }}">

        @csrf

        <label for="Nom">Nom du contact</label>
        <input id="Nom" type="text" name="Nom">

        <label for="Prenom">Prénom du contact</label>
        <input id="Prenom" type="text" name="Prenom">

        <label for="Mail">mail du contact</label>
        <input id="Mail" type="text" name="Mail">

        <label for="Numero">Numéro du contact</label>
        <input id="Numero" type="text" name="Numero">

        <label for="Entreprise">Entreprise du contact</label>
        <input id="Entreprise" type="text" name="Entreprise">
        <select name="Entreprise" id="Entreprise" class="form-control">
             @foreach($entreprises as $entreprises)
                    <option value="$entreprises->id)">{{ $entreprises->Nom }}</option>
             @endforeach
        </select>


        <input type="submit">
    </form>

</body>
</html>