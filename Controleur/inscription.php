<?php
include("Modele/utilisateurs.php");

$response = checkUserName($db,$_POST['identifiant']);

if($response->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
  $mdp = hash('sha256',$_POST['mdp']);
  createUser($db,$_POST['FullName'],$_POST['identifiant'],$mdp);
  include("Vue/non_connecte/non_connecte.php");
} else { // utilisateur trouvé dans la base de données

  $erreur = "Utilisateur inconnu";
  include("Vue/inscription_erreur.php");
}


?>
