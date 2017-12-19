<?php
    require("connexion.php");

    function estAdministrateur($db, $User_Id) {
      $reponse = $db->query('SELECT IsAdmin FROM user WHERE User_Id="'.$User_Id.'"');
      $reponse2=$reponse->fetch();
      return $reponse2;
    }
?>
