<?php
include("Modele/utilisateurs.php");

$response = checkUserName($db,$_POST['identifiant']);

$isAdmin = 0;

if ($_POST['isAdmin'] == "oui"){
  $isAdmin = 1;
}

if($response->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
  $mdp = hash('sha256',$_POST['mdp']);
  createUserAdmin($db,$_POST['FullName'],$_POST['identifiant'],$mdp,$isAdmin);
  include("Vue/administration/utilisateurs/utilisateurs.php");
} else { // utilisateur trouvé dans la base de données

  $erreur = "Utilisateur inconnu";
  include("Vue/administration/utilisateurs/utilisateurs.php");
}


?>
