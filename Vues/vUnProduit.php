<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .small-img-group{
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<?php include 'header.php';
 foreach($p as $produits): ?>
    <section class=" contenaire sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100" src="<?php echo $produits["image"] ?>" alt="">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <div> <img name="image" src="<?php echo $produits["image"] ?>" width="100%" class="small-img" ></div>
                    </div>
                    <div class="small-img-col">
                        <div> <img name="image" src="<?php echo $produits["image"] ?>" width="100%" class="small-img" alt=""></div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12">
                <h6 >categorie de produit</h6>
                <h5 class=" py-4" name="nom"><?= $produits['nom'] ?></h5>
                <h2 class="card-title" name="prix" id="total"><?= $produits['prix']  ?> €</h2> <br>
                <input type="number" id="qt" value="1" min="1" style="width: 40px" name="qt">


                <button type="button" onclick="addToCart(<?=$produits['id']?>)" class="btn btn-primary">ajouter au panier</button>
                <td ><a class="btn btn-dark" href='../php/modifier.php?id=<?=  $produits['id'] ?>'>modifier</a></td>
                <td ><a class="btn btn-dark" href='../php/supprimer.php?id=<?=  $produits['id'] ?>'>Supprimer</a></td>
                <br><br>
                <h4>Description</h4>
                <span ><?= $produits['description'] ?></span>

            </div>

        </div>
    </section>
<?php endforeach ?>


<?php print_r($_SESSION['cart']); ?>



</body>
</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/requires util.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function addToCart(articleId){
        $.ajax({
            url: '<?= BASEDIR ?>/Php/panier_add.php',
            type: 'POST',
            data: {
                articleId: articleId,
                quantite: $('#qt').val()
            },
            success: function(response){
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Article ajouté',
                    showConfirmButton: false,
                    timer: 1000
                })
                setTimeout(function() {
                    window.location.replace("<?= BASEDIR ?>/Php/panier.php");
                }, 1200);

            }
        });
    }

</script>
