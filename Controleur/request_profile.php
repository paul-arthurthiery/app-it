<?php

$USER = $_SESSION['User_Id'];
require("Modele/profile.php");

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

?>