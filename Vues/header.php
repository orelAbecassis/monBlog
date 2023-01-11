<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<img src=' <?=  BASEDIR  ?>/image/logo-png.png '  style=' width: 30%;height: 20%;'>
<!--t = accueil-->

<nav class="navbar navbar-expand-lg bg-light">

    <div class="container-fluid">
        <a class='navbar-brand' href='<?=  BASEDIR  ?>/index.php''>Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
              <a class='nav-link active' aria-current='page' href='<?=  BASEDIR  ?>/Php/listeUser.php'>Users</a>
                <li class="nav-item">
                <a class='nav-link' href='<?=  BASEDIR  ?>/Php/entremets.php'>Entremets Individuels</a>
                </li>
                <li class="nav-item">
                 <a class='nav-link' href='<?=  BASEDIR  ?>/Php/gateaux.php'>Gâteaux à partager</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link'  href='<?=  BASEDIR  ?>/Php/ajouter.php'>Ajouter</a>
                </li>


                <?php if (isset($_SESSION['connect'])): ?>
                    <li class="nav-item">
                        <a class='nav-link' href='<?=  BASEDIR  ?>/Php/panier.php'>Panier</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link'  href=' <?=  BASEDIR  ?>/Php/deconnexion.php'>Déconnexion</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link'>Bienvenue <?php echo $_SESSION['connect']['mail'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link'  href='<?=  BASEDIR  ?>/Php/rechercher.php'>Rechercher</a>
                    </li>

                <?php else: ?>
                    <li class="nav-item">
                        <a class='nav-link'  href='<?=  BASEDIR  ?>/Php/connexion.php'>Connexion</a>
                    </li>
                <?php endif;?>
<!--                <form class="d-flex" role="search">-->
<!--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                    <button class="btn btn-outline-success" name="nom_search" type="submit">Search</button>-->
<!--                </form>-->


            </ul>

        </div>
    </div>

</nav>

<header>



    <!-- Background image -->
    <div class="p-5 text-center bg-image" style=" background-image: url('<?=  BASEDIR  ?>/image/bannier.jpg'); height: auto;margin-top: auto;background-repeat: no-repeat; ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h2 class="mb-3">Pâtisserie gourmande livrée chez vous</h2>
                    <h4 class="mb-3">Qualité</h4>
                    <h4 class="mb-3">Savoir-faire</h4>
                    <h4 class="mb-3">Originalité</h4>


                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
</header>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
