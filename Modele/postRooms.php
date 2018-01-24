<?php
require("connexion.php");


if(isset($_REQUEST['input_field'])){

  $db->query('INSERT INTO room (ApartmentID,Name) VALUES   ("'.$_GET['aptID'].'" , "'.$_REQUEST['input_field'][0].'");');
  $RoomIDtemp = $db->query('SELECT RoomID FROM room WHERE ApartmentID = "'.$_GET['aptID'].'" AND Name="'.$_REQUEST['input_field'][0].'"');
  $RoomID = $RoomIDtemp->fetch();
  for ($i = 1; $i<count($_REQUEST['input_field']); $i++) {

      $type = $_REQUEST['input_field'][$i];
      $defaultValue = "20";
      
      $db->query('INSERT INTO sensor (Type,Value,RoomID) VALUES  ("'.$type.'","'.$defaultValue.'","'.$RoomID[0].'" ) ');

  }
}
$url = "index.php?cible=apt&aptID=".$_GET['aptID'];
header("Location: $url");


?>
