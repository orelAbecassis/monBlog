<?php
require_once '../include.php';
require_once '../Vues/header.php';

$p = new Produit;

if (count($_POST)==0)
{
    require_once '../Vues/vRechercher.php';

}
else
{
//le bout de code veut dire si il existe un $_Post['nom'] et pas si il n'EXISTE PAS
    //ISSET  = EXISTE
    if(!isset($_POST["nom"]))
    {

        echo '<script type="text/javascript"> alert("Entrez un nom de gateau !")</script>';
    }
    else if($_POST['nom']=='')
    {
        echo '<script type="text/javascript"> alert("Veuillez renseigner un gateau !")</script>';
        echo '<script type="text/javascript">window.location.replace("rechercher.php");</script>';
    }
    else
    {
        $p=$p->searchglobal($_POST["nom"]);
    }




    if(count($p)!=0)
    {
        include("../vues/vAccueil.php");
    }
    else
    {
        echo '<script type="text/javascript"> alert("Ce gateau n\'existe pas !")</script>';
        echo '<script type="text/javascript">window.location.replace("rechercher.php");</script>';
    }
}

?>
    <br>
    <br>

<?php
include("../Vues/footer.php");