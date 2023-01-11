<?php

class Connexion
{
    private $mail;
    private $mdp;


    public function __construct($mail,$mdp)
    {
        $this->mail=$mail;
        $this->mdp=$mdp;

    }


    function session($mail)
    {
        $_SESSION['mail'] = $mail;
    }

    function rechercherUser($mail,$pwd)
    {
        global $BD;

        $requete = $BD->prepare("select * from blog1.user where mail = :mail and mdp = :pwd ;");
        $requete->bindValue(':mail', $mail);
        $requete->bindValue(':pwd', $pwd);
        $requete->execute();
        $connect = $requete->fetch(PDO::FETCH_ASSOC);

        return $connect;

    }



}