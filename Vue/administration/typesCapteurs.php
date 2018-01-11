
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
table {
        width: 1em;
    }

thead, tbody, tr, td, th { display: block; }

tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}

thead th {
    /*height: 30px;

    /*text-align: left;*/
}

tbody {
    height: 100%;
    overflow-y: auto;
}

thead {
    /* fallback */
}


tbody td, thead th {
    width:20%;
    float: left;
}

th {
    cursor: pointer;
}

#myInput{
  width: 30%;
}

body{
  padding: 20px;
}




</style>
<body>
<div class = "container-fluid" >
  <h1>Capteurs</h1>
  <br/>

  <input type="text" id="myInput" onkeyup="research()" placeholder="Rechercher un capteur" title="Type in a name">

  <br/>
  <br/>

<form action="index.php?cible=getdata" method="post">
<div class="span3">
<table class="table table-striped" id="capteursTable">
<thead>
 <tr class="header">
   <th onclick="sortTable(0)">ID</th>
   <th onclick="sortTable(1)">Type</th>
   <th onclick="sortTable(2)">Valeur</th>
   <th onclick="sortTable(3)">RoomID</th>
   <th onclick="sortTable(4)">Actuator</th>
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
<a href=""><button type="submit" class="btn btn-primary" name="getdata">Actualiser</button></a> 

<a href="index.php"  class="btn btn-danger pull-right" role="button">Retour</a>


</div>
</form>

</body>

<script>

function research() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("capteursTable");
    tr = table.getElementsByTagName("tr");
    for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("capteursTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
