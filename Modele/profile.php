<?php
    
    require("connexion.php");

    function Fullname($db,$USER){
    	$sql_1 = "SELECT Fullname FROM user WHERE User_Id = '$USER'";
    	return $sql_1;
    	}

    function User_Id($db,$USER){
    	$sql_2 = "SELECT User_Id FROM user WHERE User_Id = '$USER'";
    	return $sql_2;
    	}

    function Password($db,$USER){
    	$sql_3 = "SELECT Password FROM user WHERE User_Id = '$USER'";
    	return $sql_3;
    	}

    function Address($db,$USER){
    	$sql_4 = "SELECT Address FROM appartment WHERE User_Id = '$USER'";
    	return $sql_4;
    	}

    function ApptId($db,$USER){
    	$sql_5 = "SELECT ApptId FROM appartment WHERE User_Id = '$USER'";
    	return $sql_5;
    	}

    function query1($con,$USER,$fullname){
        $result_1 = mysqli_query($con,"UPDATE user SET Fullname='$fullname' WHERE User_Id = '$USER'");
    }  

    function query2($con,$USER,$password){
        $result_2 = mysqli_query($con,"UPDATE user SET Password='$password' WHERE User_Id = '$USER'");
    }

    function query3($con,$USER,$address){
        $result_3=mysqli_query($con,"UPDATE appartment SET Address='$address' WHERE User_Id = '$USER'");
    }






  ?>