
<?php
require("Modele/profile.php");

$USER = $_SESSION['User_Id'];

$sql_1 = Fullname ($db,$USER);
$res_1 = mysqli_query($con, $sql_1);
if (mysqli_num_rows($res_1) > 0) {
    while($row = mysqli_fetch_assoc($res_1)) {
        $resu_1 = $row['Fullname'];
    }
} 
                    
$sql_2 = User_Id ($db,$USER);
$res_2 = mysqli_query($con, $sql_2);
if (mysqli_num_rows($res_2) > 0) {
    while($row = mysqli_fetch_assoc($res_2)) {       
        $resu_2 = $row['User_Id'];
    }
}

$sql_3 = Password ($db,$USER);
$res_3 = mysqli_query($con, $sql_3);
if (mysqli_num_rows($res_3) > 0) {
    while($row = mysqli_fetch_assoc($res_3)) {       
        $resu_3 = $row['Password'];
    }
} 

$sql_4 = Address ($db,$USER);
$res_4 = mysqli_query($con, $sql_4);
if (mysqli_num_rows($res_4) > 0) {
    while($row = mysqli_fetch_assoc($res_4)) {      
        $resu_4 = $row['Address'];
    }
} 

$sql_5 = ApptId ($db,$USER);
$res_5 = mysqli_query($con, $sql_5);
if (mysqli_num_rows($res_5) > 0) {  
    while($row = mysqli_fetch_assoc($res_5)) {
        $resu_5 = $row['ApptId'];
    }
} 


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

