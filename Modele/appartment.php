<?php
    require("connexion.php");

    function createapt($db,$name,$address,$nbrRooms,$User_Id){
      $db->query('INSERT INTO appartment (Name,ApptId,Address,NumberRooms,User_Id) VALUES  ("'.$name.'", 3, "'.$address.'", "'.$nbrRooms.'", "'.$User_Id.'")');
    }


?>
