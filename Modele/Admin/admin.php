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
           </tr>');
      }

    }

    function getSensors($db){
      $reponse = $db->query('SELECT * FROM sensor');
      return $reponse;
    }

    function genTableSensor()
    {
      require("Modele/connexion.php");

      $Sensors = getSensors($db)->fetchAll();
      for ($i = 0; $i<count($Sensors); $i++) {
        $ID = $Sensors[$i]['SensorID'];
        $Type = $Sensors[$i]['Type'];
        $Value = $Sensors[$i]['Value'];
        $RoomID = $Sensors[$i]['RoomID'];

        if($IsActuator[$i]['IsActuator']==1)
        {
          $Actuator = 'oui';
        }
        else {
          $Actuator = 'non';
        }

        echo (' <tr>
           <td>'.$ID.'</td>
           <td>'.$Type.'</td>
           <td>'.$Value.'</td>
           <td>'.$RoomID.'</td>
           <td>'.$Actuator.'</td>
           </tr>');
      }

    }

?>
