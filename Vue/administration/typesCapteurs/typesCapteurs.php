<head>
<script src="jQuery/jquery-1.12.0.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/bootstrap-confirmation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Vue/administration/typesCapteurs/typesCapteurs.css">
<script src="Vue/administration/typesCapteurs/typesCapteurs.js"></script>
</head>

<body>
<div class = "container-fluid" >
  <h1>Capteurs</h1>
  <button id="myBtn" class="btn btn-success pull-right">Ajouter un capteur</button>

  <br/>

  <input type="text" id="myInput" onkeyup="research()" placeholder="Rechercher un capteur" title="Type in a name">

  <br/>
  <br/>

<div class="span3">
<table class="table table-striped" id="capteursTable">
<thead>
 <tr class="header">
   <th onclick="sortTable(0)">ID</th>
   <th onclick="sortTable(1)">Nom</th>
   <th onclick="sortTable(2)">Actuator</th>
   <th>Supprimer type de capteur</th>

 </tr>
</thead>
<tbody>
 <?php
 require("Modele/Admin/admin.php");
 echo genTableSensor();
?>

</tbody>
</table>

</div>

<a href="index.php" class="btn btn-danger pull-right" role="button">Retour</a>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Ajouter un type de capteur</h2>
    </div>
    <div class="modal-body">
      <form class="form-signin" method="POST" action="index.php?cible=createSensorType">
      <input type="text" class="form-control" name="name" placeholder="Nom du capteur" required autofocus>
      <div id="radio">
      Est un actionneur :
      <select name="isActuator">
      <option value="non">Non</option>
      <option value="oui">Oui</option>
      </select>
    </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" id="button">
          Ajouter le type de capteur </button>
    </div>
  </div>


</div>

</body>

<script>

//---------------------------------------------------
// Pop up ajout user

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



$('[data-toggle=confirmation]').confirmation({
  rootSelector: '[data-toggle=confirmation]',
  // other options
});


</script>
