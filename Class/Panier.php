<?php

class Panier
{
    public function __construct()
    {
        if(!isset($_SESSION['cart']))
        {
            $_SESSION['cart'] = array();
        }

    }

    public function unProduitPanier()
    {
        global $BD;
        $ids = array_keys($_SESSION['cart']);
        $requete = $BD->prepare("SELECT * FROM blog1.produit WHERE id IN (".implode(',', $ids).")");
        $requete->execute();
        $connect = $requete->fetchAll(PDO::FETCH_ASSOC);

        return $connect;

    }

}