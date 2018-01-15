<?php
    require("connexion.php");

    function createapt($db,$name,$address,$nbrRooms,$User_Id){
      $db->query('INSERT INTO appartment (Name,Address,NumberRooms,User_Id) VALUES  ("'.$name.'", "'.$address.'", "'.$nbrRooms.'", "'.$User_Id.'")');
    }

    function getRooms($db, $ApptId){
    	$response = $db->query('SELECT * FROM room WHERE ApartmentID="'.$ApptId.'"');
    	return $response;
    }

    function getSensors($db, $RoomID){
    	$response = $db->query('SELECT * FROM sensor WHERE RoomID="'.$RoomID.'"');
    	return $response;
    }

    function meanTemp($sensorsPDO){
      $sensors = $sensorsPDO->fetchAll();
      $meanTempValue = 0;
      $numberOfLoops = 0;
      foreach ($sensors as $individualSensor){
        if($individualSensor['Type']==1){
          $meanTempValue += $individualSensorValue;
          $numberOfLoops++;
        }
      $meanTempValue = $meanTempValue/$numberOfLoops;
      }
      return $meanTempValue;
    }

    function getTempOfRooms($roomArray){
      $arrayOfTemps = [];
      foreach ($roomArray as $room){
        $roomID = $room['RoomID'];
        $sensorsPDO = getSensors($db, $roomID);
        $meanTemp = meanTemp($sensorsPDO);
        array_push($arrayOfTemps, $meanTemp);
      }
      return $arrayOfTemps;
    }

    if (isset($_GET["sensorDataRequest"])){
      return getTempsOfRooms($roomArray);
    }

?>
