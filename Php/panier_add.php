<?php
require_once '../include.php';

if(isset($_POST['articleId']) && isset($_POST['quantite'])){
    $articleId = $_POST['articleId'];
    $quantite = $_POST['quantite'];

    if(!isset($_SESSION['cart'][$articleId])){

        $_SESSION['cart'][$articleId] = ['quantite' => $quantite];
    } else {
        $_SESSION['cart'][$articleId]['quantite'] += $quantite;
    }
}