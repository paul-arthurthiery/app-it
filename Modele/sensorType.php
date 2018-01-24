<?php
    require("connexion.php");

    createSensorType($db,$name,$isActuator)
    {
      $db->query('INSERT INTO sensortype (Name,isActuator)
       VALUES ("'.$name.'","'.$isActuator.'");');
     }

    deleteSensorType($db,$id)
    {
      $db->query('DELETE FROM sensortype WHERE ID = "'.$id.'";' );
    }
