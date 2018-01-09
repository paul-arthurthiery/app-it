<?php

   require("connexion.php");
   
    function query3($db,$VAL,$TYP,$NUM){
        $Result_3 = "UPDATE sensor SET Value ='$VAL' WHERE Type = '$TYP' AND NUM = '$NUM' ";
        $Stmt_3 = $db->prepare($Result_3);
        $Stmt_3->execute();
        return $Stmt_3;
    }  

//'$TYP''$NUM''$TYP'
  ?>