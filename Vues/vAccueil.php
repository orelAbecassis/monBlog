<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>


<br><br>


<br><br>



    <div class="content">
    <div class="container">
        <div class="row row-cols-auto" style="justify-content: center;">
            <?php foreach($p as $produits): ?>
    <div class="col">
        <a href="<?=  BASEDIR  ?>/php/unProduit.php?id=<?php echo $produits["id"] ?>" style="text-decoration: none; color: black">


            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= $produits['image'] ?>" alt="" >
                <div class="card-body">
                    <h5 class="card-title" style="min-height: 73px"><?= $produits['nom'] ?></h5>
                </div>
        </a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $produits['prix'] ?> €</li>

                    <a href="<?=  BASEDIR  ?>/php/unProduit.php?id=<?php echo $produits["id"] ?>" class="btn btn-outline-primary">Voir plus</a>






                </ul>
            </div>
            <br><br>

    </div>
    <?php endforeach ?>

    </div>
    </div>
    </div>









</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script !src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/requires util.js"></script>