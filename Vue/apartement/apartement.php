<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="Vue/apartement/apartement.css">
      <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
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
} else {
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
        <h1>Apartement</h1><br>
        <div class="container">
          <div class="row">';
        $i=0;
        if(sizeof($roomArray)==0) { $apptBody = '<h1 id="noRooms">Pas de pièce dans cet apartement</h1>'; } else {
    	foreach ($roomArray as $room) {


        if($i %3  == 0) {
          $apptBody .= '
            </div>
          <div class="row">';
        }
    		$roomName = $room['Name'];
    		$apptBody .= '
          	<!-- Card Projects -->
          	<div class="col-md-3">
            	<div class="card">
                <div class="card-image">
                  <img class="img-responsive" src="../Images/sensorBB.svg">
                </div>

                <div class="card-content">
                  <p>'. $roomName.'</p>
                </div>

                <div class="card-action">
                  <a href="#" target="new_blank" class="sensor-value">Sensor Value loading</a>
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
