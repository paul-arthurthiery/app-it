<?php

require("Controleur/request_profile.php");
$USER = $_SESSION['User_Id'];

$contenu = '

<!DOCTYPE html>
<html>
<head>

	<title>Modifier</title>
	<style type="text/css">
	</style>


</head>

<body>
	<h1 class="h1"> Mon Profile</h1>
	<hr/>
	<div class="container-fluid">
		<div class="profiles">

			<form action="index.php?cible=modi" method="post">
		     <div class="form-group">
		       <label for="Fullname">Nom et Prénom :</label>
		       <input type="text" class="form-control" name="Fullname" value="'.$data_1.'">
		     </div>
		       <div class="form-group">
		       <label for="Password">Mot de passe :</label>
		       <input type="password" class="form-control" name="Password">
		     </div>
		       <div class="form-group">
		       <label for="Password">Confirmer mot de passe :</label>
		       <input type="password" class="form-control" name="checkPassword" >
		     </div>
			  <div class="form-group">
		       <label for="Address">Adresse :</label>
		       <input type="text" class="form-control" name="Address" value="'.$data_4.'">
		     </div>
		     <div class="form-group">
              <a href="index.php"><button type="submit" class="btn btn-primary" name="modi">Confirmer</button></a>
              <a href="index.php?cible=Myprofile"><button type="button" class="btn btn-primary">Retour</button></a>
             </div>


		   </form>
		   <?php if (!empty($erreur)) {
			    	echo($erreur);
				}?>


		</div>
	</div>
    <hr/>






</body>

</html>





';




include('gabarit.php')

?>
