<?php

function getAptIDOfRoomID($db,$roomID) {
  $reponse = $db->query('SELECT ApartmentID FROM room WHERE RoomID = "'.$roomID.'"');
  return $reponse;
}

function getSensorName($db,$IdType) {
  $reponse = $db->query('SELECT Name FROM sensortype WHERE ID = "'.$IdType.'"');
  return $reponse;
}


?>
