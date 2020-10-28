<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1_poo</title>
</head>
<body>
<form Method="POST" Action="traitement/traitement.php">
    entrez le nom
    <input type="text" label=nom id=nom name=nom value=nom required><br>
    entrez le prénom
    <input type="text" label=prenom id=prenom name= prenom value=prénom  required><br>
    entrez l'âge
    <input type=int size=2 label=age id=age  name=age value=0 required><br>
    entrez le numéro de sécu
    <input type=int size=14 label=numsecu id=numsecu name=numsecu value="numéro de sécu" required><br>
    entrez l'adresse
    <input type="text" size=45 label=adresse id=adresse name=adresse value= adresse required><br>
    entrez le contact
    <input type=mail label=contact id=contact name=contact value=contact required><br>
<input type=submit value=Envoyer>
</form>



</body>
</html>