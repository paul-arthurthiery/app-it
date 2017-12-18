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

<h3>Contacter le suport</h3>

<div class="container-fluid">
  <form action="/action_page.php">
    <label for="fname">Prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre Prenom..">

    <label for="lname">Nom</label>
    <input type="text" id="lname" name="lastname" placeholder="Votre Nom ..">

    <label for="country">Pay</label>
    <select id="country" name="country">
      <option value="france">FRANCE</option>
      <option value="autre">COREE DU NORD</option>
      <option value="autre">AFGANISTAN</option>
      <option value="autre">SOMALIE</option>
      <option value="autre">ZIMBABWE</option>
      <option value="autre">INDE</option>
      <option value="autre">CHINE</option>
      <option value="autre">AUTRE</option>
    </select>

    <label for="subject">Subjet</label>
    <textarea id="subject" name="subject" placeholder="Quel est votre problemme .." style="height:200px"></textarea>

    <input type="submit" value="Soumettre">
  </form>
</div>

</body>
</html>
';

include('gabarit.php')
?>
