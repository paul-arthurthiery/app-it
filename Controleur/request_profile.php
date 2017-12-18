<?php

$USER = $_SESSION['User_Id'];
require("Modele/profile.php");

$reponse_1 = Fullname ($db,$USER);
$reponse_1->setFetchMode(\PDO::FETCH_NUM);
while($row = $reponse_1->fetch(\PDO::FETCH_ASSOC)){
    $data_1 = $row['Fullname'];
}
                    
$reponse_2 = User_Id ($db,$USER);
$reponse_2->setFetchMode(\PDO::FETCH_NUM);
while($row = $reponse_2->fetch(\PDO::FETCH_ASSOC)){
    $data_2 = $row['User_Id'];
}

$reponse_3 = Password ($db,$USER);
$reponse_3->setFetchMode(\PDO::FETCH_NUM);
while($row = $reponse_3->fetch(\PDO::FETCH_ASSOC)){
    $data_3 = $row['Password'];
}


$reponse_4 = Address ($db,$USER);
$reponse_4->setFetchMode(\PDO::FETCH_NUM);
while($row = $reponse_4->fetch(\PDO::FETCH_ASSOC)){
    $data_4 = $row['Address'];
}


$reponse_5= ApptId ($db,$USER);
$reponse_5->setFetchMode(\PDO::FETCH_NUM);
while($row = $reponse_5->fetch(\PDO::FETCH_ASSOC)){
    $data_5 = $row['ApptId'];
}


?>