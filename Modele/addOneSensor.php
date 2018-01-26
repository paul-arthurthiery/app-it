<?php
require("Modele/connexion.php");
$defaultValue = "20";

$db->query('INSERT INTO sensor (Type,Value,RoomID) VALUES  ("'.$_POST['type'].'","'.$defaultValue.'","'.$_GET['roomID'].'" ) ');

$url = "index.php?cible=sensorPage&aptID=".$_GET['aptID']."&roomID=".$_GET['roomID']."";

header("Location: $url");


?>
