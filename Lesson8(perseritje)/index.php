<?php

$host = "localhost";
$db = "db";
$user = "root";
$pass = "";

try {
    //Connection
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
    echo "Connection successful";

    //Create table
    $sql = "CREATE TABLE IF NOT EXISTS singers(
    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL
    )";

    $pdo->exec($sql);

    echo "Table Created";

    // Alter TABLE AND ADD COLUMNS

    $sqalter  = 'ALTER TABLE singers
                ADD COLUMN password VARCHAR(30) NOT NULL';
    $pdo->exec($sqalter);
    echo "Table is altered";

    //Drop column 
    $dropsql = 'ALTER TABLE singers DROP COLUMN email';
    $pdo->exec($dropsql);

    // add data to table

    $username = "Blerta";
    $email = "blerta@gmail.com";
    $password = "123";


    $add = $pdo->prepare('INSERT INTO singers (username, email, password) VALUES (:username, :email, :password)');
    $add->bindParam(':username' ,$username);
    $add->bindParam(':email' ,$email);
    $add->bindParam(':password' , $password);

    $add->execute();
    echo "Info added";

} catch (PDOException $e) {
    echo "Connection unsucessful" . $e->getMessage();
}



?>