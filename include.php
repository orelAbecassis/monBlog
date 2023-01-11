<?php
require_once 'autoload.php';
require_once 'tools/cnx.php';
session_start();
extract($_POST);
//$connexion = new Connexion($_POST['pseudo'], $_POST['mdp'],$_POST['errors']);
$_User = new User;
$_Produit = new Produit;
$panier = new Panier;

const BASEDIR = "http://localhost/web/blog";


