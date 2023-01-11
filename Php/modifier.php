<?php

require_once '../include.php';
require_once '../Vues/header.php';
$_Produit = new Produit;

if($_GET['id']=="")
{
    header("Location:index.php");
}
else
{
    $id=$_GET["id"];
    $p = $_Produit->listerUnProduit($id);

    if(count($p)<=0)
    {
        header("Location:accueil.php");
    }

    if(count($_POST)>=6)
    {
        $etape = 3;
        $id=$_GET["id"];
        $nom=$_POST["nom"];
        $prix=$_POST["prix"];
        $description=$_POST["description"];
        $image=$_POST["image"];
        $categ=$_POST['categ'];

        $_Produit->modifier($id,$nom,$prix,$description,$image,$categ);
        echo '<script type="text/javascript">window.location.replace("../index.php");</script>';
    }
}
echo '<pre>';
var_dump($p);
echo '</pre>';


require_once '../Vues/vModifier.php';
require_once '../Vues/footer.php';

