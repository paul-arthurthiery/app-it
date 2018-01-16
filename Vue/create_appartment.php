<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		<!-- Jquery JS CDN -->
		<script
		  src="https://code.jquery.com/jquery-3.2.1.min.js"
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"></script>

		<style>
			.account-wall
			{
			    margin-top: 20px;
			    padding: 40px 0px 20px 0px;
			    background-color: #f7f7f7;
			    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
					position: absolute;
			    top: 50%;
			    left: 50%;
			    transform: translate(-50%, -60%);
			}
		</style>

		<title>Create Appartment page</title>
	</head>
	<body>
		<div class="col-md-3"></div>
		<div class="col-md-6 account-wall" style="padding: 1%;">
			<h1 class="text-center">Créer un nouvel appartement</h1><br><br><br>
			<div class=" center-block text-center">
				<form action="index.php?cible=createapt" method="POST" accept-charset="utf-8" class="form-horizontal center-block">
					<div class="form-group">
						<label for="name" class="control-label col-sm-5">Nom: </label>
						<div class="col-sm-6">
							<input type="text" name="name">
						</div>
					</div>
					<br>
					<div class="form-group center-block">
						<label for="address" class="control-label col-sm-5">Adresse: </label>
						<div class="col-sm-6">
							<input type="text" name="address">
						</div>
					</div>
					<br>
					<div class="form-group center-block">
						<label for="nbrRooms" class="control-label col-sm-5">Nombre de pièces: </label>
						<div class="col-sm-6">
							<input type="number" name="nbrRooms">
						</div>
					</div>
					<br><br><br>
					<button class="btn btn-primary btn-lg btn-block" type="submit">Créer son appartement</button>
				</form>

				<?php if (!empty($erreur)) {
			    	echo($erreur);
				}?>
			</div>
		</div>
		<div class="col-md-3"></div>
	</body>
</html>
