<?php

$contenu = '
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Vue/nous_contacter/nous_contacter.css">
</head>
<body>

<h3>Contact Form</h3>

<div class="container-fluid">

  <form action="Controleur/SendMail.php" method="post" name="form1">
    <label for="fname">Nom</label>
    <input type="text" id="fname" name="name" placeholder="Votre nom..">

    <label for="lname">Sujet</label>
    <input type="text" id="lname" name="Subject" placeholder="Votre Sujet..">

    <label for="country">Pays</label>
    <select id="country" name="country">
      <option value="france">FRANCE</option>
      <option value="autre">AUTRE</option>
    </select>

    <label for="subject">Contenu</label>
    <textarea id="subject" name="subject" placeholder="Quel est votre problème.." style="height:200px"></textarea>
    <input type="submit" value="Soumettre" name="submit">
     </form>

</div>

</body>
</html>
';
//<a href="index.php?cible=submit"><button type="button" class="btn btn-primary">Submit</button>
//<input type="submit" value="submit" name="submit">
include('gabarit.php')
?>
