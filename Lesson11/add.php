<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    //Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try{

        //Prepare SQL with hashed password

        $sql ="INSERT INTO users (username, name, surname, password, email) VALUES (:username, :name, :surname, :password, :email)";

        $insertSql = $pdo->prepare($sql);

        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':name', $name);
        $insertSql->bindParam(':surname', $surname);
        $insertSql->bindParam(':password', $hashedPassword);//this is using the hashed password
        $insertSql->bindParam(':email', $email);

        $insertSql->execite();

        echo "The user has been added succefully <br>";
        echo "<a href="dashboard.php">Dashboard</a>";
    }catch(PDOException $e){
        echo "Error:" . $e->getMessage();
    }
}




?>