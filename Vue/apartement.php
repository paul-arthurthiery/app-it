<?php

$userIDOfApartmentID=getUserIDOfApartmentID($db,$_GET['aptID']);
if ($_SESSION['User_Id']==$userIDOfApartmentID) {
  $contenu = 'ceci est appartement '. $_GET['aptID'].' ';
} else {
//include('Vue/404.php');
$contenu = 'Appartement non trouvé';
}
include('gabarit.php');
?>
