<?php
    require("Modele/connexion.php");


    function getUser($db){
      $reponse = $db->query('SELECT * FROM user');
      return $reponse;
    }

    function genTableUser()
    {
      require("Modele/connexion.php");

      $Users = getUser($db)->fetchAll();
      for ($i = 0; $i<count($Users); $i++) {
        $ID = $Users[$i]['User_Id'];
        $username = $Users[$i]['Username'];
        $fullName = $Users[$i]['FullName'];
        if($Users[$i]['IsAdmin']==1)
        {
          $admin = 'oui';
        }
        else {
          $admin = 'non';
        }

        echo (' <tr>
           <td>'.$ID.'</td>
           <td>'.$username.'</td>
           <td>'.$fullName.'</td>
           <td>'.$admin.'</td>
           <td>
           <a id="suprUserBtn" data-toggle="confirmation" data-singleton="true"
               href="index.php?cible=deleteUser&userID='.$ID.'"
               class="btn btn-danger"
               data-title="Êtes-vous sûr ?"
               data-btn-ok-label="Oui"
               data-btn-cancel-label="Non"
               role="button" data-popout="true">
               Supprimer '.$fullName.'
           </a></td>
           </tr>');
      }

    }

    function getSensors($db){
      $reponse = $db->query('SELECT * FROM sensor');
      return $reponse;
    }

    function getsensortype($db){
      $reponse = $db->query('SELECT * FROM sensortype');
      return $reponse;
    }
    function genTableSensor()
    {
      require("Modele/connexion.php");

      $Sensors = getsensortype($db)->fetchAll();
      $SensorsTypes = getsensortype($db)->fetchAll();
      for ($i = 0; $i<count($Sensors); $i++) {
        $ID = $Sensors[$i]['ID'];
        $Name = $Sensors[$i]['Name'];
        $Actuator = $SensorsTypes[$i]['IsActuator'];
        if($Actuator==1)
        {
          $Actuator = 'oui';
        }
        else {
          $Actuator = 'non';
        }

        echo (' <tr>
           <td>'.$ID.'</td>
           <td>'.$Name.'</td>
           <td>'.$Actuator.'</td>
           <td>
           <a id="suprSensorBtn" data-toggle="confirmation" data-singleton="true"
               href="index.php?cible=deleteSensorType&sensorTypeId='.$ID.'"
               class="btn btn-danger"
               data-title="Êtes-vous sûr ?"
               data-btn-ok-label="Oui"
               data-btn-cancel-label="Non"
               role="button" data-popout="true">
               Supprimer '.$Name.'
           </a></td>
           </tr>');
      }

    }

?>
