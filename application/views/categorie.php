<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>
<body>
<header><nav class="navbar navbar-dark navbar-expand-md sticky-top py-3" id="mainNav" style="border-bottom: solid 2px #3e71e7;">
    <div class="container">
                </svg></span><span class="navbar-brand d-flex align-items-center">Categorie</span></a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#">All</a></li>
                <?php foreach($categorie as $row) { ?>
                <li class="nav-item"><a class="nav-link" href="showcategorie"><?php echo $row->categorie; ?></a></li>
                <?php } ?>
            </ul>
    <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">AjoutObjets</a>
                <a class="dropdown-item" href="categories">Categorie</a>
                <a class="dropdown-item" href="#">Deconnexion</a>
            </div>
    </div>
      
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        </div>
    </div>
</nav>
</header>
</body>
</html>