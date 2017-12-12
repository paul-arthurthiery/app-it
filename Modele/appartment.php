<?php
    require("connexion.php");

    function createapt($db,$name,$address,$nbrRooms,$User_Id){
      $db->query('INSERT INTO appartment (Name,Address,NumberRooms,User_Id) VALUES  ("'.$name.'", "'.$address.'", "'.$nbrRooms.'", "'.$User_Id.'")');
    }



?>
