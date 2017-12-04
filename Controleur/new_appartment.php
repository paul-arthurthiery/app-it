<?php
	if(isset($_GET['cible']) && $_GET['cible']=="createapt") {
		
		if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['nbrRooms'])){
			include("Model/appartment.php");
			
			createapt($db,$_POST['name'],$_POST['address'],$_POST['nbrRooms'], $_SESSION['User_Id']);

			//include("Vue/accueil.php");

			//do the queries plz
		} else {
			$erreur = '<p>Veuillez remplir tous les champs</p>';
			include("Vue/create_appartment.php");
		}
	} 

?>