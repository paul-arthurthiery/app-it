<?php
require("Modele/connexion.php");


function getsensortype($db){
  $reponse = $db->query('SELECT * FROM sensortype ;');
  return $reponse;
}

function genMenuSensor()
{
  require("Modele/connexion.php");
  $response = '';
  $Sensors = getsensortype($db)->fetchAll();
  for ($i = 0; $i<count($Sensors); $i++) {
    $Name = $Sensors[$i]['Name'];
    $ID = $Sensors[$i]['ID'];
    $response = $response. '<option value="'.$ID.'">'.$Name.'</option>';
  }
  return $response;
}
?>
