<?php

$userIDOfApartmentID=getUserIDOfApartmentID($db,$_GET['aptID'])->fetch();

if ($_SESSION['User_Id']==$userIDOfApartmentID['User_Id'])
{
    $contenu = 'ceci est appartement '.$_GET['aptID'].'';
}
else
{
    $contenu = 'Appartement non trouvé';
}

include('gabarit.php');

?>
