<?php

$host = 'localhost';
$db = 'db';
$pass = '';
$user = "root";


try{
    $pdo = new PDO("mysql:host=$host; dbname=$db" , $user, $pass);
    echo "Connected";
}catch(PDOException $e){
    echo "Not connected" . $e->getMessage();
}



?>