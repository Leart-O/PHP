<?php

$host = "localhost";
$dbname = "db";
$user = "root";
$pass = "";

try{
$pdo = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected";
}catch(PDOException $e){
    echo "Error" . $e->getMessage();
}

//  Check if form is submitted to insert data
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Collect data from form
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    // Insert data into users table
    $sql = "INSERT INTO user (name, surname, email) VALUES (:name, :surname, :email)";
    $stmt= $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':email', $email);
    $stmt->execute();    
}

// SQL query to fetch data from user table
$sql = "SELECT name, surname, email FROM user";
$result = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Data</title>
    <style>
        table{
            width: 50%;
            border-collapse: collapse;
        }

        table, th, td{
            border:1px solid black;
        }

        th, td{
            padding:10px;
            text-align:left;
        }
    </style>
</head>
<body>
    <h2>Add new user</h2>
    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" placeholder="Enter name"><br>
        <label for="surname">Surname:</label><br>
        <input type="text" name="surname" placeholder="Enter surname"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="Enter Email"><br>
        <input type="submit" value="Submit">
    </form>

    <h2>User Data</h2>


    <?php
    if($result->rowCount() > 0){
        echo "<table>";
        echo "<tr><th>Name</th><th>Surname</th><th>Email</th></tr>";

        //Output data from each row
        while($row = $result ->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row["surname"] . "</td><td>" . $row['email'] . "</td></tr>";
        }

        echo "</table>";
    }else{
        echo "0 results";
    }
    
    
    ?>
</body>
</html>