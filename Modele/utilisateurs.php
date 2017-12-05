<?php
    require("connexion.php");

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function mdp($db,$identifiant){
        $reponse = $db->query('SELECT Username, Password FROM user WHERE Username="'.$identifiant.'"');
        return $reponse;
    }

    function appt($db,$User_Id){

        $reponse = $db->query('SELECT * FROM (SELECT ApptId,appartment.User_Id FROM appartment INNER JOIN user ON user.User_Id=appartment.User_Id) AS tempo WHERE User_Id="'.$User_Id.'"');
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


?>
