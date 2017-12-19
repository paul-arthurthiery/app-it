
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
    height: 400px;
    overflow-y: auto;
}

thead {
    /* fallback */
}


tbody td, thead th {
    width:25%;
    float: left;
}
</style>

<div class = "container-fluid">
  <h2>Utilisateurs</h2>
<div class="span3">
<table class="table table-striped">
<thead>
 <tr>
   <th>ID</th>
   <th>Pseudo</th>
   <th>Nom complet</th>
   <th>Admin</th>
 </tr>
</thead>
<tbody>
 <?php
 require("Modele/Admin/admin.php");
 echo genTableUser();
?>

</tbody>
</table>

</div>

<a href="index.php" class="btn btn-danger pull-right" role="button">Retour</a>

</div>
