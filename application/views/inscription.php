<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <title>Inscription</title>
</head>
<body>
    <form action="inscriptionFini" method="post">
        <div id="tout" style="margin-top: -100px;">
            <div class="login">
                <h2 style="font-family:cursive;">Inscription</h2>
                <p><input class="identifiant" type="text" placeholder="Nom" name="nom" required></p>
                <p><input class="email" type="email" placeholder="E-mail" name="email" required></p>
                <p><input class="mdp" type="password" placeholder="Mot de passe" name="mdp" required></p>
                <p><input class="inscription" type="submit" value="Inscription"></p>
            </div>
        </div >
    </form>
</body>
</html>