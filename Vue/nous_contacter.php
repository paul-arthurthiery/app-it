<?php

$contenu = '
<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #5bc0de;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #31b0d5;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
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
    <textarea id="subject" name="subject" placeholder="Quel est votre probleme.." style="height:200px"></textarea>
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

