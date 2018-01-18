<?php
    require("Modele/connexion.php");

     $id = $_GET['sensorTypeId'];
     $db->query('DELETE FROM sensortype WHERE ID = "'.$id.'";');


       include("Vue/administration/typesCapteurs/typesCapteurs.php");

  ?>
