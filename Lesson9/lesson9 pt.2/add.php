<?php

// Include the database connection

include_once("config.php");

//Check if the form is submitted
if(isset($_POST['submit'])){
    //Get the user input from the POST request

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    //Sanitize input to avoid XXS attacks

    $name = htmlspecialchars($name);
    $surname = htmlspecialchars($surname);
    $email = htmlspecialchars($email);

    // Check if email alredy exists in the database (optional, to avoid duplications)

    $checkQuery = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
    $checkQuery->bindParam(':email', $email);
    $checkQuery->exec();
    $existinguserCount = $checkQuery->fetchColumn();
}

?>