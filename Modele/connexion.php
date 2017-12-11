<?php
    $dbname = "smartpanel";
    $host='localhost';
    $user='root';
    $pass='root';

    $db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
    $con = new mysqli("localhost", "root", "root","smartpanel");
    $db->query("SET NAMES UTF8");
    
?>
