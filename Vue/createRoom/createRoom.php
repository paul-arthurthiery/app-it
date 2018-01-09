<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="Vue/createRoom/createRoom.css">
  <title>Ajouter pièce</title>
  <script src="Vue/createRoom/createRoom.js"></script>
</head>
<body>
  <h1>Ajouter pièce</h1>

  <?php include('Controleur/createRoom.php'); ?>

  <div>
    <form action="index.php?cible=formCreerPiece" method="post">
      Nom<br>
      <input type="text" name="roomName">
    </form>
    <br>
    <h1>Ajouter capteur</h1>
    <br>
    <form id='formSensor'>
      Nom
      <br>
      <input type="text" name="Nom">
      <br>
      <select id = 'php'>
        <?php echo genTypeMenu(); ?>
      </select>
      <br>
    </form>
  </div>
  <button type="button" onclick="formulaireScript()">Ajouter autre capteur</button>
  <br>

  <input type="submit" value="Envoyer">
</body>
</html>
