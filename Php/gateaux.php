<?php
require_once '../include.php';
require_once '../Vues/header.php';

extract($_POST);
$p = $_Produit->listerCategGateaux();
require_once '../Vues/vAccueil.php';
require_once '../Vues/footer.php';

?>
