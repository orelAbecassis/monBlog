<?php

$total = 0;
?>
<main id="cart" style="margin: auto">
    <br><br>
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-12 col-sm-8 items">
                <section class="h-100" style="background-color: #eee;">
                    <div class="container h-100 py-5">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-10">

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h3 class="fw-normal mb-0 text-black">Votre Panier</h3>
                                </div>

                                <div class="card rounded-3 mb-4">
                                    <?php
                                    if (isset($panier)):

                                        foreach($panier as $produits):

                                            ?>

                                    <div class="card-body p-4">

                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="<?= $produits['image'] ?>" class="img-fluid rounded-3"
                                                     alt="Cotton T-shirt">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <!--                                                                <p class="lead fw-normal mb-2">-->
                                                <?php //echo $produits['nom'];
                                                ?><!--</p>-->
                                                <p><span class="text-muted"><?php echo $produits['nom']; ?></p>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <p><?php echo $_SESSION['cart'][$produits['id']]['quantite'] ?></p>

                                                <button class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0"><?php echo $produits['prix']; ?> €</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <?php $total+=$_SESSION['cart'][$produits['id']]['quantite']*$produits['prix']; endforeach; ?>

                                    <?php else: ?>
                                        <p>Il n'y a aucun article dans le panier</p>
                                    <?php endif; ?>


                                    <div class="card">
                                        <br>
                                        <div class="row mx-0 mb-2">
                                            <div class="col-sm-8 p-0 d-inline">
                                                <h5>Total</h5>
                                            </div>
                                            <div class="col-sm-4 p-0">
                                                <p id="total"><?php echo $total; ?>€</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <button onclick="paiement()" id="btn-checkout" class="shopnow"><span>Paiement</span>
                                            </button>
                                            <!--                                            <button type="button" class="btn btn-dark btn btn-warning btn-block btn-lg">Paiement</button>-->
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                </section>

            </div>
        </div>
    </div>
</main>

<?php if (!isset($_SESSION['cart']) || sizeof($_SESSION['cart']) <= 4) { ?>
    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
<?php } ?>
<script> function paiement() {
        Swal.fire({
            icon: 'success',
        })
    }
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>