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
   /* $sql_2 = "SELECT nickname FROM userdata WHERE username = '$username'";  
    $res_2 = mysql_query($sql_2,$link);  
    $show_nickname = mysql_result($res_2,0);  
      
    $sql_3 = "SELECT sex FROM userdata WHERE username = '$username'";  
    $res_3 = mysql_query($sql_3,$link);  
    $show_sex = mysql_result($res_3,0);  
      
    $sql_4 = "SELECT message FROM userdata WHERE username = '$username'";  
    $res_4 = mysql_query($sql_4,$link);  
    $show_mess = mysql_result($res_4,0);  

    */
    
    




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
		       <label for="Fullname">Nom et Prénom:</label>
		       <input type="text" class="form-control" name="Fullname" value="'.$resu_1.'">
		     </div>
			 <div class="form-group">
		       <label for="User_Id">Utilisateur ID:</label>
		       <input type="text" class="form-control" name="User_Id" value="'.$resu_2.'" readonly="true">
		     </div>
		       <div class="form-group">
		       <label for="Password">Password:</label>
		       <input type="password" class="form-control" name="Password" placeholder="'.$resu_3.'">
		     </div>
		       <div class="form-group">
		       <label for="Password">Confirmer Password:</label>
		       <input type="password" class="form-control" name="checkPassword" >
		     </div>
			  <div class="form-group">
		       <label for="Address">Address:</label>
		       <input type="text" class="form-control" name="Address" placeholder="'.$resu_4.'">
		     </div>
		     
			 <div class="form-group">
		       <label for="ApptId">Appartement ID :</label>
		       <input type="text" class="form-control" name="ApptId" value="'.$resu_5.'" readonly="true">
		     </div>
		     <div class="form-group">
              <a href="index.php"><button type="submit" class="btn btn-primary" name="modi">Confirmer</button></a>  
              <a href="index.php?cible=Myprofile"><button type="button" class="btn btn-primary">Retour</button></a>  
             </div>  
				

		   </form>


		</div>
	</div>
    <hr/>
    





</body>

</html>





';


   

include('gabarit.php')

?>



  
