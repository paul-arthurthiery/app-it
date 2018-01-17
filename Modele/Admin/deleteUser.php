<?php
    require("Modele/connexion.php");
    $db->query('DELETE FROM user WHERE User_Id = "'.$_GET['userID'].'"');
    include("Vue/administration/utilisateurs/utilisateurs.php");
?>
