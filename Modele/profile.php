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






  ?>