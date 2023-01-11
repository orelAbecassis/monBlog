<?php
require_once '../include.php';
include '../Vues/header.php';
$p = new Produit;
$categList=$p->listerCateg();

if (count($_POST)==0)
{
    include('../Vues/vAjouter.php');
}
else
{

    $nom=$_POST["nom"];
    if (isset($nom))
    {
        $unSexe="";
    }
    $description=$_POST["description"];
    if (isset($description))
    {
        $description="";
    }
    $categ=$_POST["categ"];
    if (isset($categ))
    {
        $categ="";
    }
    $image=$_POST["image"];
    if (isset($image))
    {
        $image="";
    }


    $p->ajouter($_POST['nom'],$_POST['prix'],$_POST['description'],$_POST['image'],$_POST['categ']);
    echo '<script type="text/javascript">window.location.replace("../index.php");</script>';
}
include("../Vues/footer.php");
