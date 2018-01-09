<?php


  function genTypeMenu() {
    include('Modele/roomAndSensor.php');
      $types = getTypes($db);
      $reponse_types=$types->fetchAll();
      for ($i = 0; $i<count($reponse_types); $i++) {
        $data = $reponse_types[$i]['Name'];
        $j=$reponse_types[$i]['ID'];
        echo ('<option value="'.$j.'">"'.$data.'"</option>');
        //echo ('<option value=""></option>');
      }

      $menu = ob_get_clean();
      //echo $menu;
      return $menu;
    }
  // Récupérer l'ApartmentID en GET quand l'utilisateur clique sur 'créer pièce'

  global $roomID; //Stocker l'ID de la room nouvellement créée


  if(isset($_GET['cible']) && $_GET['cible']=="formCreerPiece") {
    $roomID = addRoom($db, $_GET['ApartmentID'], $_POST['roomName']);

    for ($k = 0; $k < $_GET['nbSensors']; $k++){ // Envoyer le nombre de capteurs créés
      addSensor($db, $roomID, $_POST['sensorType']);
    }


  }
?>
