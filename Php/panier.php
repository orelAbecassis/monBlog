<?php
include '../include.php';
include '../Vues/header.php';

$pan = new Panier;

$panier = $pan->unProduitPanier();
//var_dump($panier);

include '../Vues/vPanier.php';
include '../Vues/footer.php';