<?php
  
    


$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=smartpanel", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT * FROM appartment" );

    $stmt->execute();
    while ($data = $stmt->fetch()) {
    	echo $data['Name'];
    	echo "<br/>";
    }
    $stmt->closeCursor();
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>

 