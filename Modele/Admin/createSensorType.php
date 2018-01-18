<?php
    require("Modele/connexion.php");

     $name = $_POST['name'];


     if ($_POST['isActuator'] = "oui"){
       $isActuator = 1;
     }

      $db->query('INSERT INTO sensortype (Name,isActuator)
       VALUES ("'.$name.'","'.$isActuator.'");');

       include("Vue/administration/typesCapteurs/typesCapteurs.php");

  ?>
