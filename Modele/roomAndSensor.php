<?php
require("connexion.php");

function getTypes($db){
  // Design table sensorType pas encore décidé
  $reponse=$db->query('SELECT Name, ID FROM sensorType');
  return $reponse;
}
function addRoom($db, $apartmentID, $roomName){
  $db->query('INSERT INTO room(ApartmentID, Name) VALUES ("'.$apartmentID.'","'.$roomName.'")');
}

function addSensor($db, $roomID, $sensorType){
  $db->query('INSERT INTO sensor(RoomID, Type) VALUES ("'.$roomID.'","'.$sensorType.'")');
}
?>
