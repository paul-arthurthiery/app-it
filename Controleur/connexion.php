<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if(isset($_GET['cible']) && $_GET['cible']=="verif") { // L'utilisateur vient de valider le formulaire de connexion
        if(!empty($_POST['identifiant']) && !empty($_POST['mdp'])){ // L'utilisateur a rempli tous les champs du formulaire
            include("Modele/utilisateurs.php");


            $reponse = mdp($db,$_POST['identifiant']);
            $getUID = getUID($db,$_POST['identifiant']);


            if($reponse->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
                $erreur = "Utilisateur inconnu";
                include("Vue/connexion_erreur.php");
            } else { // utilisateur trouvé dans la base de données
                $ligne = $reponse->fetch();
                if(md5($_POST['mdp'])!=$ligne['Password']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
                    $erreur = "Mot de passe incorrect";
                    include("Vue/connexion_erreur.php");
                } else { // mot de passe correct, on affiche la page d'accueil


                  $UID = $getUID->fetch();
                  $_SESSION['User_Id'] = $UID['User_Id'];
                  $reponse_appt = appt($db,$_SESSION['User_Id']);
                    if($reponse_appt->rowcount()==0) {
                      include("Vue/create_appartment.php");
                      }
                    else {
                      include("Vue/accueil.php");
                    }
                }
            }
        } else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs";
            include("Vue/connexion_erreur.php");
        }
    } else { // La page de connexion par défaut
        include("Vue/non_connecte.php");
    }
?>
