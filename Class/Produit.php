<?php



class Produit
{
    public function lister()
    {

        global $BD;
        $requete = $BD->prepare("select * from blog1.produit;");
        $requete->execute();

        $connect = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $connect;
    }


    public function listerCategEntremet()
    {

        global $BD;
        $requete = $BD->prepare("SELECT produit.id, produit.nom, categorie.nom_categ,produit.prix, produit.image FROM blog1.categorie INNER JOIN blog1.produit on categorie.id_categ = produit.categ where categorie.id_categ = 1");
        $requete->execute();
        $connect = $requete->fetchAll(PDO::FETCH_ASSOC);

        return $connect;
    }


    public function listerCategGateaux()
    {

        global $BD;
        $requete = $BD->prepare("SELECT produit.id, produit.nom, categorie.nom_categ,produit.prix, produit.image FROM blog1.categorie INNER JOIN blog1.produit on categorie.id_categ = produit.categ where categorie.id_categ = 2");
        $requete->execute();
        $connect = $requete->fetchAll();

        return $connect;
    }


    public function listerUnProduit($id)
    {

        global $BD;
        $requete = $BD->prepare("select * from blog1.produit where id = :id;");
        $requete->bindValue(':id', $id);
        $requete->execute();

        $connect = $requete->fetchAll();

        return $connect;
    }


    //ajouter un invité en inserant les données d'un formulaire
     public function ajouter($nom,$prix,$description,$image,$categ)
    // function ajouter($unNom,$unPrenom,$unNomHebraique, $uneDate, $unSexe,$uneAdresse, $uneAdresse1,$uneVille, $unCp, $unEmail, $unMobile, $uneSociete,$unStatut, $unCom, $unPaie, $unMontant)

    {

        // Ouvrir une connexion au serveur mysql en s'identifiant
            global $BD;

            $requete = $BD->prepare("INSERT INTO blog1.produit (nom, prix, description, image, categ) VALUES (:nom, :prix, :description, :image, :categ)");
            $requete->bindValue(':nom', $nom);
            $requete->bindValue(':prix', $prix);
            $requete->bindValue(':description', $description);
            $requete->bindValue(':image', $image);
            $requete->bindValue(':categ', $categ);
            $requete->execute();



                // Lancer la requ�te d'ajout
            $ok=$requete;

                // Si la requ�te a r�ussi
            if ($ok)
            {
            $message = "l'invite a bien ete ajoute";
                //   ajouterErreur($tabErr, $message);
            }
            else
            {
                $message = "L'invite n'a pas ete ajoute !!!";
                //   ajouterErreur($tabErr, $message);
            }



    }
    public function listerCateg()
    {
        global $BD;

        $requete = $BD->prepare("SELECT categorie.nom_categ FROM blog1.produit INNER JOIN blog1.categorie on produit.id = categorie.id_categ;");
//        $requete->bindValue(':id', $id);
        // Lancer la requ�te supprimer
        $supp=$requete->execute();
//        echo $requete;
        return $supp;

    }


    public function supprimer($id)
    {
        global $BD;

//        SET FOREIGN_KEY_CHECKS = 0;

        $requete = $BD->prepare("delete from blog1.produit where id= :id ");
        $requete->bindValue(':id', $id);
        // Lancer la requ�te supprimer
        $supp=$requete->execute();
//        echo $requete;
        return $supp;

    }

    //rechercher les invites en fonctions des infos de ces derniers (jusqua 3 recherches possibles)
    public function searchglobal($nom)
    {
        global $BD;
            $requete = $BD->prepare("SELECT p.nom, p.prix,p.id, p.description, p.image, c.nom_categ FROM blog1.produit p INNER JOIN blog1.categorie c on p.categ = c.id_categ WHERE p.nom LIKE '%".$nom."%';");
//        $requete->bindValue(':nom', $nom);
        $requete->execute();

        $connect = $requete->fetchAll();

        return $connect;

    }



    // Modifier un invité via l'ID
    public function modifier($id,$nom, $prix,$description,$image,$categ)

    {
        global $BD;
        $requete=$BD ->prepare("UPDATE participant SET nom='".$nom."',prix='".$prix."',description='".$description."',image='".$image."',categ='".$categ."' WHERE Id_part=".$id.";");
        // echo $requete;

        $requete->execute();

        $connect = $requete->fetchAll();


        // Si la requ�te a r�ussi
        if ($connect)
        {
             return "l'invite a bien ete modifie";
        }
        else
        {
            return "L'invite n'a pas ete modifie !!!";
        }

    }





}

