<?php  

if(isset($_GET['cible']) && $_GET['cible']=="modi") { 
	$USER = $_SESSION['User_Id'];
	$fullname= $_POST['Fullname'];
    $password=md5($_POST['Password']);
    $address=$_POST['Address'];
    $check=md5($_POST['checkPassword']);
    if ($password == $check){
    	require("Modele/profile.php") ;
    	$result_1=query1($con,$USER,$fullname);
    	$result_2=query2($con,$USER,$password);
    	$result_3=query3($con,$USER,$address);
    	include("gabarit.php");

    } else {
    	include("Vue/Edit.php");
    	echo "<script> alert('Vefifier votre Password！'); </script>";
    }

            /*
            if($result_1||$result_2||$result_3){  
            echo "<script> alert('Succeed！'); </script>";  
            echo "<meta http-equiv='Refresh' content='0;URL=$url'>";  
        }else{  
            echo "<script> alert('Failed！'); </script>";  
        }  */

    }
    

?>