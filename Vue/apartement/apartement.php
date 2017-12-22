<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="Vue/apartement/apartement.css">
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
    	$titre = "Premier Appartement";


    	// !isset($_GET['ApptId'] ? $roomArray = getRooms($db, $firstAptID)->fetchAll() : $roomArray = getRooms($db, $_GET['aptID'])->fetchAll();


        $apptBody = '
        <h1>Apartement</h1><br>
        <div class="container">';
        $i=0;
        if(sizeof($roomArray)==0) { $apptBody = '<h1 id="noRooms">Pas de pièce dans cet apartement</h1>'; } else {
    	foreach ($roomArray as $room) {
    		$i++;
    		$roomName = $room['Name'];
    		$apptBody .= '
    			<h3>'. $roomName.'</h3>
        		<div class="row">
	            	<!-- Card Projects -->
	            	<div class="col-md-2">
		            	<div class="card">
		                    <div class="card-image">
		                        <img class="img-responsive" src="../sensordespi.png">
		                    </div>

		                    <div class="card-content">
		                        <p>Sensor '. $i.'</p>
		                    </div>

		                    <div class="card-action">
		                        <a href="#" target="new_blank">Sensor Value</a>
		                    </div>
	                	</div>
	            	</div>
	            	<div class="col-md-2">
		            	<div class="card">
		                    <div class="card-image">
		                        <img class="img-responsive" src="../sensordespi.png">
		                    </div>

		                    <div class="card-content">
		                        <p>Sensor '. $i.'</p>
		                    </div>

		                    <div class="card-action">
		                        <a href="#" target="new_blank">Sensor Value</a>
		                    </div>
	                	</div>
	            	</div>
	            	<div class="col-md-2">
		            	<div class="card">
		                    <div class="card-image">
		                        <img class="img-responsive" src="../sensordespi.png">
		                    </div>

		                    <div class="card-content">
		                        <p>Sensor '. $i.'</p>
		                    </div>

		                    <div class="card-action">
		                        <a href="#" target="new_blank">Sensor Value</a>
		                    </div>
	                	</div>
	            	</div>
	        	</div>';
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
