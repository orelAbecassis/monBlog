<?php

require_once '../include.php';
include '../Vues/header.php';
$p= new Produit;
$id = $_GET["id"];
$p->supprimer($id);
?>

<!--redirection de la page apres suppression-->
<SCRIPT LANGUAGE="JavaScript">
    document.location.href= "../index.php"
    </SCRIPT>


