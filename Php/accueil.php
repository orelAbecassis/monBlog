<?php

require_once 'include.php';
$t=0; //header
$f=0; //footer
$n=0; //
$i=0; // fiche un produit

include 'Vues/header.php';

if(isset($_POST['mail']))
{
    if(!empty($_POST['mail']))
    {

        header('Location: Vues/vAccueil.php');
    }
}
extract($_POST);
$p = $_Produit->lister();

require_once 'Vues/vAccueil.php';

include 'Vues/footer.php';


