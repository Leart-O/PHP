<?php

$host = "localhost";

$db_name = "challange";

$username = "root";

$password = "";



try {

  $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "DONE!";

} catch (PDOException $e) {

  echo "Connection failed: " . $e->getMessage();

}

?>