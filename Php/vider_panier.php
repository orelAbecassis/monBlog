<?php
session_start();
$itemId = $_POST['articleId'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    $_SESSION['cart']['quantite'] = 0;
}

if (!isset($_SESSION['cart'][$itemId])){
    $_SESSION['cart'][$itemId]['quantite'] = 0;
}

if(!empty($_SESSION['cart'][$itemId]['quantite'])){
    $_SESSION['cart'][$itemId]['quantite'] -= 1 ;
    $_SESSION['cart']['quantite'] -= 1 ;
}


$data = array(
    "quantiteProduit" => $_SESSION['cart'][$itemId]['quantite'],
    "quantiteMax"     => $_SESSION['cart']['quantite'],
);

$jsonData = json_encode($data);

echo $jsonData;

