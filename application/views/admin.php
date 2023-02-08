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
                </svg></span><span class="navbar-brand d-flex align-items-center">Acceuil</span></a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navcol-1">

    <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="add">AjoutObjets</a>
                <a class="dropdown-item" href="categories">Categorie</a>
                <a class="dropdown-item" href="#">Deconnexion</a>
            </div>
    </div>
      
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        </div>
    </div>
</nav>
</header>


<div class="contenu" style="display: flex;flex-wrap:nowrap;">
<div class="row" style="margin: 50px 0px 0px 50px; width:1900px; height: 100px;">


<?php foreach($records as $row) { ?>
<div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm" style="border: solid #3e71e7;"><img src="../assets/img/echange.jpg" alt="" class="img-fluid card-img-top" style="border-radius: 15px 15px 0px 0px;">
          <div class="p-4">
            <p class="text-dark"><u><?php echo $row->prix; ?>£</u></p>
            <p class="small text-black " style="font-weight: bold;"><?php echo $row->description; ?></p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg px-3 py-2 mt-4" style="margin-left:75px">
              <p class="small mb-0">
                <a href="supprime?id=<?php echo $row->idObjet;?>" style="text-decoration: none;"><span><i class="fa fa-2x fa-trash" style="color: #3e71e7;margin-right:50px;"></i></span></a>
                <a href="updateObjet?id=<?php echo $row->idObjet;?>" style="text-decoration: none;"><span><i class="fas fa-2x fa-edit" style="color: #3e71e7;"></i></span></a>
            </div>
          </div>
        </div>      
</div>
<?php } ?>
</div>
</div>