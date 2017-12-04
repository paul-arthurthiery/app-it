<?php
	if(isset($_GET['cible']) && $_GET['cible']=="createapt") {
		if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['mdp'])){
			include("Model/appartment.php");


			//do the queries plz
		} else {
			$erreur = "Veuillez remplir tous les champs";
		}
	} else {
		include("Vue/create_appartment.php");
	}
?>