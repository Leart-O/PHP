<?php

$host= 'localhost';
$user = 'root';
$pass = '';
$dbname = "db";



try{
    //Set connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);


    //Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    echo "Connection is sucessful";
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}



?>
