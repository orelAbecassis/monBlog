<?php
require_once '../include.php';


if(!isset($_POST['mail']))
{
    include '../Vues/vConnexion.php';
}
else
{
    $mail = $_POST['mail'];
    $pwd = $_POST['mdp'];
    $connexion = new Connexion($mail,$pwd);
    $resultat = $connexion->rechercherUser($mail,$pwd);

    if($resultat): ?>
        <div class="alert alert-success" role="alert">
            Connexion réussi Login :
        </div>
        <?php
            $_SESSION['connect'] = $resultat;
            echo $mail; header('Location:'. BASEDIR );
        ?>
        <?php else: ?>
            <script>alert("Identifiants incorrects" )</script>
    <?php endif; } ?>