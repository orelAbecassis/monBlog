<?php
require_once '../include.php';

include '../Vues/header.php';

extract($_POST);
$p = $_Produit->listerCategEntremet();
require_once '../Vues/vAccueil.php';
include '../Vues/footer.php';

