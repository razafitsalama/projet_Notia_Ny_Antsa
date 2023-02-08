<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/modif.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <title>Inscription</title>
</head>
<body>
    <form action="ajout" method="post">
        <div id="tout" style="margin-top: -100px;">
            <div class="login">
                <h2 style="font-family:cursive; color:white;">Ajouter un Objet</h2>
                <p><input class="identifiant" type="text" placeholder="Nom de l'objet" name="nomObjet" required></p>
                <p><select name="categorie" class="identifiant" style="width: 280px;" required>
                    <option value="">categorie</option>
                    <option value="1">vetement</option>
                    <option value="2">technologie</option>
                </select></p>
                <p><input class="email" type="number" placeholder="Prix" name="prix" required></p>
                <p><textarea class="identifiant" name="description" cols="20" rows="0" placeholder="Description" required></textarea></p>
                <p><input class="inscription" type="submit" value="Enregistre"></p>
            </div>
        </div >
    </form>
</body>
</html>