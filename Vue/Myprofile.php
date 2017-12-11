
<?php

require("Controleur/request_profile.php");

$contenu = '

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
		       <label for="usr">Nom et Prénom:</label>
		       <input type="text" class="form-control" name="Nom" value="'.$resu_1.'"readonly="true">
		     </div>
			 <div class="form-group">
		       <label for="usr">Utilisateur ID:</label>
		       <input type="text" class="form-control" name="ID" value="'.$resu_2.'" readonly="true">
		     </div>
		       <div class="form-group">
		       <label for="usr">Password:</label>
		       <input type="password" class="form-control" name="password" value="'.$resu_3.'" readonly="true">
		     </div>
			  <div class="form-group">
		       <label for="usr">Address:</label>
		       <input type="text" class="form-control" name="Post" value="'.$resu_4.'" readonly="true">
		     </div>
		     
			 <div class="form-group">
		       <label for="usr">Appartement ID :</label>
		       <input type="text" class="form-control" name="APP" value="'.$resu_5.'" readonly="true">
		     </div>
				

		   </form>


		</div>
	</div>



<hr/>

  <a href="index.php?cible=Gérer"><button type="button" class="btn btn-primary">Modifier</button>
	<a href="index.php"><button type="button" class="btn btn-primary">Retour</button>


</body>
</html>



 ';

include('gabarit.php')

?>

