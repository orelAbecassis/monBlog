<?php

class Inscription
{

    private $pseudo;
    private $mdp;
    private $mail;

    private $confirmationMDP;

    public function __construct($pseudo, $mdp, $mail, $confirmationMDP)
    {
        $this->pseudo = "'".$pseudo."'";
        $this->mdp = "'".$mdp."'";
        $this->mail = "'".$mail."'";
        $this->confirmationMDP = "'".$confirmationMDP."'";
    }

    public function valider()
    {
        global $BD;
        if (empty($this->pseudo) || empty($this->mdp) || empty($this->mail) || empty($this->confirmationMDP)) {
            return "Tous les champs sont obligatoires.";
        }
//        if (!filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
//            return "L'adresse email n'est pas valide.";
//        }
        if ($this->mdp != $this->confirmationMDP) {
            return "Le mot de passe et la confirmation du mot de passe ne correspondent pas.";
        }
        return true;
    }

    public function enregistrer($pseudo)
    {
        global $BD;

        // Vérifiez si l'utilisateur existe déjà en exécutant une requête SQL
        $existingUser =   $BD->prepare ("SELECT * FROM blog1.user WHERE pseudo = '$pseudo'");
        $existingUser->execute();
        $ligne = $existingUser->fetch();
        if ($ligne) {
            // Si l'utilisateur existe déjà, retournez un message d'erreur
            return "Ce nom d'utilisateur est déjà pris.";
        }
        else
        {

            $requete = $BD->prepare("INSERT INTO blog1.user (`pseudo`, `mdp`, `mail`, `confirmationMDP`) VALUES ( $this->pseudo, $this->mdp, $this->mail, $this->confirmationMDP);");
            $requete->execute();
        }


    }








}
