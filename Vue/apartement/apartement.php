<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="Vue/apartement/apartement.css">
      <script
  src="jQuery/jquery-3.2.1.min.js"></script>
	</head>
</html>

<?php
// include 'Modele/menu.php';
include 'Modele/appartment.php';


$firstAptID = GetAppt($db, $_SESSION['User_Id'])->fetchAll()[0]['ApptId'];
global $testWhosApt;

if (!isset($_GET['aptID'])){
	$roomArray = getRooms($db, $firstAptID)->fetchAll();
	$testWhosApt = true;
  $currentAptID = $firstAptID;
} else {
  $currentAptID = $_GET['aptID'];
	global $userIDOfApartmentID;
	$userIDOfApartmentID = getUserIDOfApartmentID($db,$_GET['aptID'])->fetch();
	if($_SESSION['User_Id']==$userIDOfApartmentID['User_Id']){
		$roomArray = getRooms($db, $_GET['aptID'])->fetchAll();
		$testWhosApt = true;
	} else {
		$testWhosApt = false;
	}
}


if ($testWhosApt)
{


        $apptBody = '
        <a id="addButton" href="index.php?cible=createRoom&aptID='.$currentAptID.'" class="btn btn-primary pull-right" role="button">Ajouter une pièce</a>
        <h1>Appartement</h1> <br>
        <div class="container-fluid">
          <div class="row">';
        $i=0;
        if(sizeof($roomArray)==0) { $apptBody = '<h1 id="noRooms">Pas de pièce dans cet appartement</h1> <br/>   <a id="addButton" href="index.php?cible=createRoom&aptID='.$currentAptID.'" class="btn btn-primary center-block" role="button">Ajouter une pièce</a>'; } else {
    	foreach ($roomArray as $room) {


        if($i %3  == 0) {
          $apptBody .= '
            </div>
          <div class="row">';
        }
    		$roomName = $room['Name'];
        $roomID = $room['RoomID'];
    		$apptBody .= '
          	<!-- Card Projects -->
          	<div class="col-md-4">
            	<div class="card">
                <div class="card-image">
                  <a href="index.php?cible=sensorPage&aptID='.$currentAptID.'&roomID='.$roomID.'">
                  <img class="img-responsive" src="Images/blueroom.svg">
                  </a>
                </div>

                <div class="card-content">
                  <p>'. $roomName.'</p>
                </div>

                <div class="card-action">
                  <a href="#" target="new_blank" class="sensor-value">Chargement des capteurs ...</a>
                </div>
              </div>
          	</div>';
            $i++;
    	};


	}
	$contenu = $apptBody;

}
else
{
    $contenu = 'Appartement non trouvé';
}

include('gabarit.php');


?>

<script type="text/javascript">var roomArray = '<?php echo json_encode($roomArray); ?>';</script>
<script src="Vue/apartement/apartement.js"> </script>
