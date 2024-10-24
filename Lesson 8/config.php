<?php 

$host = "localhost";
$db = "lesson8";
$user = "root";
$password = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user,$password);
    // $sql = "CREATE TABLE users (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    // username varchar (30) NOT NULL,
    // PASSWORD VARCHAR (50) NOT NULL
    // )";
    // $pdo->exec($sql);
    
    // $username = "Erin";
    // $password = "12345678";
    // $email = "erin@gmail.com"
    // $sql = "Insert into users (username,password,email) values('$username','$password','$email')";
    // $pdo->exec($sql);

    // $sql = "Alter table users add email varchar(255)";
    // $pdo->exec($sql);

    // $sql = "alter table users drop column email";
    // $pdo->exec($sql);

    $sql = "drop table users";
    $pdo->exec($sql);

    echo"Table deleted";

}catch(Exception $e){
 echo "Error creating table:" . $e->getMessage();
}



?>