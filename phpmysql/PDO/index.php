<?php
  $serverName = "localhost";
  $userName = "root";
  $password = "";
  $dbName = "ph10005_maithigam";

 try {
  $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}





