<?php

if(isset($_GET['cible']) && $_GET['cible']=="modi") {
	$USER = $_SESSION['User_Id'];
	$fullname= $_POST['Fullname'];
    $password=hash('sha256',$_POST['Password']);
    $address=$_POST['Address'];
    $check=hash('sha256',$_POST['checkPassword']);
    if ($password == $check){
    	require("Modele/profile.php") ;
    	$stmt_1=query1($db,$USER,$fullname);
    	$stmt_2=query2($db,$USER,$password);
    	$stmt_3=query3($db,$USER,$address);
			header('Location: /index.php?cible=Myprofile');

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
