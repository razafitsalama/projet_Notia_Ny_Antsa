<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <title>login</title>
</head>
<body>
    <form action="Welcome/login" method="post">
        <div id="tout">
        <div id="user"><i class="fas fa-3x fa-user"></i></div>
            <div class="login">
                <p><input class="identifiant" type="text" placeholder="E-mail" name="email" value="admin@gmail.com"></p>
                <p><input class="mdp" type="password" placeholder="Mot de passe" name="mdp" value="admin"></p>
                <p><input class="connexion" type="submit" value="Connexion"></p>
                <p><a href="Welcome/inscription" style="color: white;">S'inscrire</a></p>
            </div>
        </div>
    </form>
</body>
</html>