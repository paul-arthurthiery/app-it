<?php
  session_start();
  require("Modele/connexion.php");
  require("Vue/commun.php");

  if (isset($_GET['cible']) && $_GET['cible'] == "inscription") {
    include("Vue/inscription/inscription.php");
  }else if (isset($_GET['cible']) && $_GET['cible'] == "inscriptionValidation") {
      include("Controleur/inscription.php");
  }else if(!isset($_SESSION["User_Id"])) { // L'utilisateur n'est pas connecté
    include("Controleur/connexion.php"); // On utilise un controleur secondaire pour éviter d'avoir un fichier index.php trop gros
  } else { // L'utilisateur est connecté
    include("Modele/statutAdministrateur.php");
    $estAdministrateur = estAdministrateur($db, $_SESSION['User_Id'])['IsAdmin'];
    if ($estAdministrateur == 0) { // Routeur utilisateur
        include("Controleur/new_appartment.php");
        if(isset($_GET['cible'])) { // on regarde la page où il veut aller
          if ($_GET['cible'] == "apt") {
            include("Vue/apartement/apartement.php");
          }
            else if ($_GET['cible'] == "etape1"){
                include("Modele/utilisateurs.php");
                $reponse = utilisateurs($db);
                include("Vue/etape1.php");
            } else if ($_GET['cible'] == "etape2"){
                include("Vue/etape2.php");
            } else if ($_GET['cible'] == "etape3"){
                include("Vue/etape3.php");
            } else if ($_GET['cible'] == "Myprofile"){
                  include("Vue/Myprofile.php");
            } else if ($_GET['cible'] == "nouscontacter"){
                  include("Vue/nous_contacter/nous_contacter.php");
            } else if ($_GET['cible'] == "about"){
                include("Vue/about/about.php");
            } else if ($_GET['cible'] == "Gérer"){
                  include("Vue/Edit.php");
           } else if ($_GET['cible'] == "modi") {
                  include("Controleur/modi_profile.php");
           } else if ($_GET['cible'] == "submit"){
                  include("Controleur/SendMail.php");
           }
           else if ($_GET['cible'] == "deconnexion"){
                // Détruit toutes les variables de session
                $_SESSION = array();
                if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time()-42000, '/');
                }
                session_destroy();
                include("Vue/non_connecte/non_connecte.php");
            }
        } else { // affichage par défaut
            include("Vue/404/404.php");
          }
        } elseif (estAdministrateur($db, $_SESSION['User_Id'])['IsAdmin'] == 1) { // Routeur administrateur

          if (isset($_GET['cible']) && $_GET['cible'] == "deconnexion") {
            $_SESSION = array();
            if (isset($_COOKIE[session_name()])) {
              setcookie(session_name(), '', time()-42000, '/');
            }
            session_destroy();

            include("Vue/non_connecte/non_connecte.php");
          } elseif (isset($_GET['cible']) && $_GET['cible'] == "typesCapteurs") {
            include ("Vue/administration/typesCapteurs/typesCapteurs.php");
          } elseif (isset($_GET['cible']) && $_GET['cible'] == "utilisateurs") {
            include ("Vue/administration/utilisateurs/utilisateurs.php");
          } elseif (isset($_GET['cible'])) {
            echo('Page non autorisée');
          } else {
            include ("Vue/administration/admin/admin.php");
          }
      }
    }
