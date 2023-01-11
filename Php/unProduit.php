<?php
require_once '../include.php';

$p = new Produit;

extract($_POST);
$id = $_GET["id"];
$p = $_Produit->listerUnProduit($id);
require_once '../Vues/vUnProduit.php';

require_once '../Vues/footer.php';