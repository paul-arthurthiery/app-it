<?php

$contenu = '






<!DOCTYPE html>
<html>
<head>

	<title>My Profile Page</title>
	<style type="text/css">



	</style>


</head>

<body>
	<h1 class="h1"> Mon Profile</h1>
	<hr/>
	<div class="container-fluid">
		<div class="profiles">


			<form>
		     <div class="form-group">
		       <label for="usr">Nom:</label>
		       <input type="text" class="form-control" name="Nom" placeholder="Votre nom">
		     </div>
				 <div class="form-group">
		       <label for="usr">Prénom:</label>
		       <input type="text" class="form-control" name="Prénom" placeholder="Votre Prénom">
		     </div>
		       <div class="form-group">
		       <label for="usr">Password:</label>
		       <input type="text" class="form-control" name="password" placeholder="Votre Password">
		     </div>
				 <div class="form-group">
					<label for="usr">Address:</label>
					<input type="text" class="form-control" name="Address" placeholder="xxx RUE xxx ville">
				</div>
				<div class="form-group">
		       <label for="usr">Code Postale:</label>
		       <input type="text" class="form-control" name="Post" placeholder="75001">
		     </div>
				 
				 

		   </form>


		</div>
	</div>



<hr/>



  <a href="index.php?cible=Myprofile"><button type="button" class="btn btn-primary">Confirmer</button></a>


</body>

</html>

';

include('gabarit.php')

?>
