<?php
    $entete = entete("Mon site / Accueil");
    $menu = menu("accueil");



    //include("Modele/utilisateurs.php");
    $appt = appt($db,$_SESSION['User_Id']);
    //$reponse_appt = $appt->fetchAll(PDO::FETCH_ASSOC);
    //$reponse_appt_name=$reponse_appt['Name'];
    //$contenu = $reponse_appt_name;
    $contenu = '<ul>';
    $reponse_appt=$appt->fetchAll();
    for ($i = 0; $i<count($reponse_appt); $i++) {
      //$contenu .= '<li> <a href="index.php?cible=controleurAppt&'".$reponse_appt['ApptId']."'">'".$reponse_appt['Name']."' </a></li>';
      //$valueTest= $currentAppt['Name'];
      $data=$reponse_appt[$i]['Name'];
      $contenu .="<li>$data</li>";
    }
    $contenu .= '</ul>';


    $pied = pied();


    include 'gabarit.php';
