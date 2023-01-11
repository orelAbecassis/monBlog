<?php
require_once '../include.php';
require_once '../Vues/header.php';

extract($_POST);
$u = $_User ->listerUser();
require_once '../Vues/vListeUser.php';

require_once '../Vues/footer.php';
?>
