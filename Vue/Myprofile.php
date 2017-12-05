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
	<div class="container">
		<div class="profiles">


			<form>
		     <div class="form-group">
		       <label for="usr">Nom:</label>
		       <input type="text" class="form-control" name="Nom" value="1"readonly="true">
		     </div>
				 <div class="form-group">
		       <label for="usr">Prénom:</label>
		       <input type="text" class="form-control" name="Prénom" value="1"readonly="true">
		     </div>
				 <div class="form-group">
					<label for="usr">Email:</label>
					<input type="text" class="form-control" name="Email" value="1"readonly="true">
				</div>
				 <div class="form-group">
		       <label for="usr">Utilisateur ID:</label>
		       <input type="text" class="form-control" name="ID" value="1"readonly="true">
		     </div>
				 <div class="form-group">
		       <label for="usr">Appartement ID :</label>
		       <input type="text" class="form-control" name="APP" value="1"readonly="true">
		     </div>
				 <div class="form-group">
		       <label for="usr">Code Postale:</label>
		       <input type="text" class="form-control" name="Post" value="1"readonly="true">
		     </div>

		   </form>


		</div>
	</div>



<hr/>



  <button type="button" class="btn btn-primary">Gére</button>
	<button type="button" class="btn btn-primary">Retour</button

</body>

</html>

';

include('gabarit.php')

?>
