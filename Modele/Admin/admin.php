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
?>
