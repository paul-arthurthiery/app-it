<!DOCTYPE html>
<html>
    <head>
    	<style type="text/css">

			.card {
			box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
			}

			.card {
			margin-top: 10px;
			box-sizing: border-box;
			border-radius: 2px;
			background-clip: padding-box;
			}
			.card span.card-title {
			color: #fff;
			font-size: 24px;
			font-weight: 300;
			text-transform: uppercase;
			}

			.card .card-image {
			position: relative;
			overflow: hidden;
			}
			.card .card-image img {
			border-radius: 2px 2px 0 0;
			background-clip: padding-box;
			position: relative;
			z-index: -1;
			}
			.card .card-image span.card-title {
			position: absolute;
			bottom: 0;
			left: 0;
			padding: 16px;
			}
			.card .card-content {
			padding: 16px;
			border-radius: 0 0 2px 2px;
			background-clip: padding-box;
			box-sizing: border-box;
			}
			.card .card-content p {
			margin: 0;
			color: inherit;
			}
			.card .card-content span.card-title {
			line-height: 48px;
			}
			.card .card-action {
			border-top: 1px solid rgba(160, 160, 160, 0.2);
			padding: 16px;
			}
			.card .card-action a {
			color: #ffab40;
			margin-right: 16px;
			transition: color 0.3s ease;
			text-transform: uppercase;
			}
			.card .card-action a:hover {
			color: #ffd8a6;
			text-decoration: none;
			}
		</style>
	</head>
</html>

<?php

$userIDOfApartmentID=getUserIDOfApartmentID($db,$_GET['aptID'])->fetch();

if ($_SESSION['User_Id']==$userIDOfApartmentID['User_Id'])
{
    	include 'Modele/appartment.php';
    	$titre = "Premier Appartement";



    	$apptBody = '
    	<h1>Apartement</h1><br>
    	<div class="container">';
    	$i=0;
        $roomArray = getRooms($db, $_GET['aptID'])->fetchAll();
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
    
    $contenu = $apptBody;
}
else
{
    $contenu = 'Appartement non trouvé';
}

include('gabarit.php');

?>
