
<?php

if(isset($_GET['cible']) && $_GET['cible']=="getdata") {



    require("Modele/changedata.php") ;
    $url="http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=0011";
    $m= file_get_contents( $url );
    $length = mb_strlen($m); 

for ($i=0; $i < (($length-1)/33); $i++) { 
	//$TRA = substr("$m",0+33*$i,1);
	//$OBJ = substr("$m",1+33*$i,4);
	//$REQ = substr("$m",5+33*$i,1);
	$TYP = substr("$m",6+33*$i,1); 
	$NUM = substr("$m",7+33*$i,2); 
	$VAL = substr("$m",9+33*$i,4); 
	//$TIM = substr("$m",13+33*$i,4);
	//$CHK = substr("$m",17+33*$i,2);
    $Stmt_3 =query3($db,$VAL,$TYP,$NUM);

    }


include("Vue/administration/typesCapteurs.php");    
}    
?>

