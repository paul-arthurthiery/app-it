<?php
    require("connexion.php");

    function GetAppt($db,$User_Id){
        $reponse = $db->query('SELECT * FROM (SELECT Name, ApptId, appartment.User_Id FROM appartment INNER JOIN user ON user.User_Id=appartment.User_Id) AS tempo WHERE User_Id="'.$User_Id.'"');
        return $reponse;
    }
?>
