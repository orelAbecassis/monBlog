<?php
//require_once 'autoload.php';
require_once '../include.php';
//require_once '../Class/Inscription.php';
if(isset($_POST['pseudo']))
{
    $inscription = new Inscription($_POST['pseudo'], $_POST['mdp'], $_POST['mail'], $_POST['confirmationMDP']);
    $resultat = $inscription->valider();
    if ($resultat == true) {
        $inscription->enregistrer($_POST['pseudo'], $_POST['mdp'], $_POST['mail'], $_POST['confirmationMDP']);;
        header('Location: ../index.php');
    }
    else
    {
        echo "erreur";

    }

}
else
{
    include '../Vues/vInscription.php';

}
?>
