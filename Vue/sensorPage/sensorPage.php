<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="Vue/sensorPage/sensorPage.css">
      <script
  src="jQuery/jquery-3.2.1.min.js"></script>
	</head>
</html>

<?php
// include 'Modele/menu.php';
include('Modele/appartment.php');
include('Modele/sensors.php');
include("Modele/addSensors.php");
$menu =  genMenuSensor();

$firstAptID = GetAppt($db, $_SESSION['User_Id'])->fetchAll()[0]['ApptId'];
global $testWhosRoom;

  $currentAptID = $_GET['aptID'];
	global $userIDOfApartmentID;
  $AptIDOfRoomID = getAptIDOfRoomID($db,$_GET['roomID'])->fetch();
	$userIDOfApartmentID = getUserIDOfApartmentID($db,$AptIDOfRoomID['ApartmentID'])->fetch();
	if($_SESSION['User_Id']==$userIDOfApartmentID['User_Id']){
		$sensorArray = getSensors($db, $_GET['roomID'])->fetchAll();
		$testWhosRoom = true;
	} else {
		$testWhosRoom = false;
	}



if ($testWhosRoom)
{


        $roomBody = '
        <span id="addSensor" class="pull-right">
        <form action="index.php?cible=addSensor&aptID='.$currentAptID.'&roomID='.$_GET['roomID'].'" method="post">

        <span id = "dropdown">
        <select name="type"/>
        '.$menu.'
        </select>
        </span>
        <input type="submit" name="save" value="Ajouter un capteur"/>
        </form>
        </span>
        <h1>Capteurs</h1> <br>
        <a id="returnButton" href="index.php?cible=apt&aptID='.$_GET['aptID'].'" class="btn btn-danger pull-right" role="button" data-spy="affix">Retour</a>
        <div class="container-fluid">
          <div class="row">';
        $i=0;
        if(sizeof($sensorArray)==0) { $roomBody = '<h1 id="noRooms">Pas de capteurs dans cette pièce</h1> <br/>'; } else {
    	foreach ($sensorArray as $sensor) {


        if($i %4  == 0) {
          $roomBody .= '
            </div>
          <div class="row">';
        }
    		$SensorName = getSensorName($db,$sensor['Type'])->fetch()[0];
    		$roomBody .= '
          	<!-- Card Projects -->
          	<div class="col-md-3">
            	<div class="card">
                <div class="card-image">
                  <img class="img-responsive" src="Images/sensorPlaceHolder.svg">
                </div>

                <div class="card-content">
                  <p>'. $SensorName.'</p>
                </div>

                <div class="card-action">
                  <p> Valeur du capteur : '. $sensor['Value'].'</p>
                </div>
              </div>
          	</div>
            ';
            $i++;
    	};

	}
	$contenu = $roomBody;

}
else
{
    $contenu = 'Pièce non trouvée';
}

include('gabarit.php');


?>
