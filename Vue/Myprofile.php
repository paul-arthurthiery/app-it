
<?php

echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";

$USER = $_SESSION['User_Id'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "smartpanel";
 
$con = new mysqli($servername, $username, $password, $dbname);


$sql_1 = "SELECT Fullname FROM user WHERE User_Id = '$USER'";
$res_1 = mysqli_query($con, $sql_1);
if (mysqli_num_rows($res_1) > 0) {
    while($row = mysqli_fetch_assoc($res_1)) {
        $resu_1 = $row['Fullname'];
    }
} 

$sql_2 = "SELECT User_Id FROM user WHERE User_Id = '$USER'";
$res_2 = mysqli_query($con, $sql_2);
if (mysqli_num_rows($res_2) > 0) {
    while($row = mysqli_fetch_assoc($res_2)) {       
        $resu_2 = $row['User_Id'];
    }
}

$sql_3 = "SELECT Password FROM user WHERE User_Id = '$USER'";
$res_3 = mysqli_query($con, $sql_3);
if (mysqli_num_rows($res_3) > 0) {
    while($row = mysqli_fetch_assoc($res_3)) {       
        $resu_3 = $row['Password'];
    }
} 

$sql_5 = "SELECT Address FROM appartment WHERE User_Id = '$USER'";
$res_5 = mysqli_query($con, $sql_5);
if (mysqli_num_rows($res_5) > 0) {
    while($row = mysqli_fetch_assoc($res_5)) {      
        $resu_5 = $row['Address'];
    }
} 

$sql_6 = "SELECT ApptId FROM appartment WHERE User_Id = '$USER'";
$res_6 = mysqli_query($con, $sql_6);
if (mysqli_num_rows($res_6) > 0) {  
    while($row = mysqli_fetch_assoc($res_6)) {
        $resu_6 = $row['ApptId'];
    }
} 
/*
$sql = "SELECT user.Fullname,user.User_Id,user.E_mail,appartment.Address,appartment.ApptId FROM user INNER JOIN appartment ON user.User_Id=appartment.User_Id WHERE User_Id=123456789 ";
$sql_1 = "SELECT Fullname FROM user"
$res_1 = mysqli_query($con,$sql_1);  
$Fullname = mysqli_result($res_1,0);
$result = $con->query($sql); 
while($row = $result -> fetch_assoc())
  {

  echo $row['Fullname']; echo $row['User_Id'];  echo $row['E_mail']; echo $row['Address']; echo $row['ApptId'];
  echo "<br />";
 
}
 */


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
		       <input type="text" class="form-control" name="Post" value="'.$resu_5.'" readonly="true">
		     </div>
		     
			 <div class="form-group">
		       <label for="usr">Appartement ID :</label>
		       <input type="text" class="form-control" name="APP" value="'.$resu_6.'" readonly="true">
		     </div>
				

		   </form>


		</div>
	</div>



<hr/>

  <a href="index.php?cible=Gérer"><button type="button" class="btn btn-primary">Gére</button>
	<a href="index.php"><button type="button" class="btn btn-primary">Retour</button>


</body>
</html>



 ';

include('gabarit.php')

?>

