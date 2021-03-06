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
      if (!$sensors) {return null;}
      $meanTempValue = 0;
      $numberOfLoops = 0;
      foreach ($sensors as $individualSensor){
        if($individualSensor['Type'] != 1) {
          continue;
        }
        $individualSensorValue = $individualSensor['Value'];
        $meanTempValue += $individualSensorValue;
        $numberOfLoops++;

      }
      $meanTempValue = $meanTempValue/$numberOfLoops;
      return number_format($meanTempValue, ((int) $meanTempValue == $meanTempValue ? 0 : 2));
    }

    function getTempOfRooms($roomArray){
      require("connexion.php");
      $roomArray = json_decode($roomArray, true);
      $arrayOfTemps = [];
      foreach ($roomArray as $room){
        $roomID = $room['RoomID'];
        $sensorsPDO = getSensors($db, $roomID);
        $meanTemp = meanTemp($sensorsPDO);
        if($meanTemp){
        array_push($arrayOfTemps, $meanTemp);
        }
      }
      $jsonArrayOfTemps = json_encode($arrayOfTemps);
      print_r($jsonArrayOfTemps);
      return ($jsonArrayOfTemps);
    }

    if (isset($_GET["sensorDataRequest"])){
      return getTempOfRooms($_GET["roomArray"]);
    }

?>
