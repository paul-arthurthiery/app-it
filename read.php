<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Get data from website</title>
</head>

<body>
<?php
$url="http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=0011";
$m= file_get_contents( $url );
$length = mb_strlen($m); 
//echo($length);
//echo($m)."<br>";
for ($i=0; $i < (($length-1)/33); $i++) { 
	$TRA = substr("$m",0+33*$i,1)."<br>";
	$OBJ = substr("$m",1+33*$i,4)."<br>";
	$REQ = substr("$m",5+33*$i,1)."<br>";
	$TYP = substr("$m",6+33*$i,1)."<br>"; echo $TYP;
	$NUM = substr("$m",7+33*$i,2)."<br>"; echo $NUM;
	$VAL = substr("$m",9+33*$i,4)."<br>"; echo $VAL;
	$TIM = substr("$m",13+33*$i,4)."<br>";
	$CHK = substr("$m",17+33*$i,2)."<br>";
	/* substr("$m",19+33*$i,4) ,"/" ,substr("$m",23+33*$i,2) ,"/",substr("$m",25+33*$i,2)."<br>";
	 substr("$m",27+33*$i,2) ,":",substr("$m",29+33*$i,2) ,":",substr("$m",31+33*$i,2)  ."<br>";
	 */
	
}

    
?>


</body>
</html>