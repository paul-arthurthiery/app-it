<?php
include("Modele/utilisateurs.php");

$response = checkUserName($db,$_POST['identifiant']);
$responseCemac = checkCemac($db,$_POST['cemac']);

if(($response->rowcount()==0) && ($responseCemac->rowcount()==1)) {  // L'utilisateur n'a pas été trouvé dans la base de données
  $mdp = hash('sha256',$_POST['mdp']);
  createUser($db,$_POST['FullName'],$_POST['identifiant'],$mdp);
  include("Vue/non_connecte/non_connecte.php");
} else { // utilisateur trouvé dans la base de données
  if($response->rowcount()>0){
    $erreur = "Nom d'utilisateur deja pris";
  }
  if($responseCemac->rowcount()==0){
    $erreur = "Numéro de série inconnu";
  }
  include("Vue/inscription_erreur.php");
}


?>
