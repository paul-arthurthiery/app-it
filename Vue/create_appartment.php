

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Jquery JS CDN -->
		<script
		  src="https://code.jquery.com/jquery-3.2.1.min.js"
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"></script>
		<title>Create Appartment page</title>
	</head>
	<body>
		<form action="index.php?cible=createapt" method="POST" accept-charset="utf-8">
			Nom: <input type="text" name="name">
			Address: <input type="text" name="address">
			Nombre de pièces: <input type="number" name="nbrRooms">
			<button type="submit">Créer son appartement</button>
		</form>
		<br/>
		<?php if (!empty($erreur)) {
		    echo($erreur);
		}?>
	</body>
	<?php
		include("Controleur/new_appartment.php");
	?>
</html>
