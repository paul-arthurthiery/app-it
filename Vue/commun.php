<?php


include("Modele/menu.php");

function genAptMenu() {

  global $db,$_SESSION;


  $appt = GetAppt($db,$_SESSION['User_Id']);

  echo ('<ul class="collapse list-unstyled" id="homeSubmenu">');
  $reponse_appt=$appt->fetchAll();
  for ($i = 0; $i<count($reponse_appt); $i++) {
    $data = $reponse_appt[$i]['Name'];
    $j=$reponse_appt[$i]['ApptId'];
    echo ('<li><a href="index.php?cible=apt&aptID='.$j.'">'.$data.'</a></li>');
  }
  echo ("<li><a href='index.php?cible=create_appartment'>Create apartment</a></li>");
  echo ('</ul>');

  $menu = ob_get_clean();
  return $menu;
}
?>
