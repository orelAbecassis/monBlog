<?php

include 'cnx.php';

function listeIdGateaux($unId)
{

    $connect=connexionBDD();

    if(true)
    {
        //on prepare la requete :
    $requet="select * from produit where id=".$unId;

    //on va aller chercher les elements dans la bdd :
    $resultat=$connect->query($requet);

    //on affiche les données :
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    $i=0;
    while($ligne)
    {
        $donnee[$i]['id']=$ligne->id;
        $donnee[$i]['nom']=$ligne->nom;
        $donnee[$i]['prix']=$ligne->prix;
        $donnee[$i]['ingredient']=$ligne->ingredient;
        $donnee[$i]['description']=$ligne->description;
        $donnee[$i]['image']=$ligne->image;

        $ligne=$resultat->fetch();
        $i=$i +1;

    }
    }
    $resultat->closeCursor();   // fermer la requete
    return $donnee;


}


?>