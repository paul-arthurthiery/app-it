<?php
    
    require("connexion.php");
    

    function Fullname($db,$USER){
        $reponse_1 = $db->query('SELECT Fullname FROM user WHERE User_Id="'.$USER.'"');
    	return $reponse_1;
    	}

    function User_Id($db,$USER){
    	$reponse_2 = $db->query('SELECT User_Id FROM user WHERE User_Id="'.$USER.'"');
    	return $reponse_2;
    	}

    function Password($db,$USER){
    	$reponse_3 = $db->query('SELECT Password FROM user WHERE User_Id="'.$USER.'"');
        return $reponse_3;
    	}

    function Address($db,$USER){
    	$reponse_4 = $db->query('SELECT Address FROM appartment WHERE User_Id="'.$USER.'"');
        return $reponse_4;
    	}

    function ApptId($db,$USER){
    	$reponse_5 = $db->query('SELECT ApptId FROM appartment WHERE User_Id="'.$USER.'"');
        return $reponse_5;
    	}

    function query1($db,$USER,$fullname){
        $result_1 = "UPDATE user SET Fullname='$fullname' WHERE User_Id = '$USER'";
        $stmt_1 = $db->prepare($result_1);
        $stmt_1->execute();
        return $stmt_1;
    }  

    function query2($db,$USER,$password){
        $result_2 = "UPDATE user SET Password='$password' WHERE User_Id = '$USER'";
        $stmt_2 = $db->prepare($result_2);
        $stmt_2->execute();
        return $stmt_2;
    }

    function query3($db,$USER,$address){
        $result_3 = "UPDATE appartment SET Address='$address' WHERE User_Id = '$USER'";
        $stmt_3 = $db->prepare($result_3);
        $stmt_3->execute();
        return $stmt_3;
    }






  ?>