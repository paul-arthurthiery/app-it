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


?>
