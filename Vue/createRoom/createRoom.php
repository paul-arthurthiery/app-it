<<?php
include("Modele/addSensors.php");
$menu =  genMenuSensor();
$currentAptID = $_GET['aptID'];
$contenu = '
<script src="jQuery/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="Vue/createRoom/createRoom.css">
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>

<h1> Créer une pièce</h1>

<form action="index.php?cible=postRooms&aptID='.$currentAptID.'" method="post">
<input name="input_field[]" type="text" placeholder="Nom de la pièce">
<div class="field_wrapper">
<div id="selector">
<span id = "dropdown">
<select name="input_field[]"/>
'.$menu.'
</select>
</span>
<a href="javascript:void(0);" class="add_input_button" title="Add field"><i class="fas fa-plus-circle fa-lg" height="20" width="20"></i></a>
</div>
</div>
<input type="submit" name="save" value="Submit"/>
</form>

<script src="Vue/createRoom/createRoom.js"> </script>

';

include("gabarit.php");

 ?>
