<?php


include("Modele/menu.php");
include("Modele/connexion.php");
//require("Modele/connexion.php");

function genAptMenu() {
  include("Modele/connexion.php");

  $appt = GetAppt($db,$_SESSION['User_Id']);

  $menu = '<ul class="collapse list-unstyled" id="homeSubmenu">';
  $reponse_appt=$appt->fetchAll();
  for ($i = 0; $i<count($reponse_appt); $i++) {

    $data=$reponse_appt[$i]['Name'];
    $menu .="<li><a>$data</a></li>";
  }
  $menu .= '</ul>';
}
?>
