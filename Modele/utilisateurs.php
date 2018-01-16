<?php
    require("connexion.php");

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function mdp($db,$identifiant){
        $reponse = $db->query('SELECT Username, Password FROM user WHERE Username="'.$identifiant.'"');
        return $reponse;
    }

    //fonction qui renvoie la liste des appartements d'un utilisateurs avec un identifiant
    function appt($db,$User_Id){

        $reponse = $db->query('SELECT * FROM (SELECT Name, ApptId, appartment.User_Id FROM appartment INNER JOIN user ON user.User_Id=appartment.User_Id) AS tempo WHERE User_Id="'.$User_Id.'"');
        return $reponse;
    }

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function utilisateurs($db){
        $reponse = $db->query('SELECT Username FROM user');
        return $reponse;
    }

    function getUID($db,$identifiant){
      $reponse = $db->query('SELECT User_Id FROM user WHERE Username="'.$identifiant.'"');
      return $reponse;
    }
    function createUser($db,$fullName,$identifiant,$mdp){
    $UUID = uniqid();
     $db->query('INSERT INTO user (User_Id,Username, Password, FullName, IsAdmin)
      VALUES ("'.$UUID.'","'.$identifiant.'", "'.$mdp.'", "'.$fullName.'", 0);');
    }

    function checkUserName($db,$identifiant)
    {
      $reponse = $db->query('SELECT * FROM user WHERE Username="'.$identifiant.'" ');
      return $reponse;
    }



?>
