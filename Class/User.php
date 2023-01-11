<?php



class User
{
    public function listerUser()
    {

        global $BD;
        $requete = $BD->prepare("select * from blog1.user");
        $requete->execute();
        $connect = $requete->fetchAll();

        return $connect;
    }
}