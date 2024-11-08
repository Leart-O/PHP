<?php


//GETTING THE DATA FROM THE FORM
if(isset($_GET['name']) && isset($_GET['password']) /*get is used to get the data*/ ){
    $name = htmlspecialchars($_GET['name']);/*gets the values from the form where we inputed them*/
    $password = htmlspecialchars($_GET['password']);

    echo "Username is: " . $name . "<br>";/*Displaying them*/ 
    echo "Passeord is: " . $password . "<br>";
 }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <form action="index.php" method="get">
    <label for="Name">Name: </label><br>
    <input type="text" name="name" placeholder="Enter Name"><br><br>

    <label for="password">Password: </label><br>
    <input type="password" name="password" placeholder="Enter Password"><br><br>

    <input type="submit" value="Submit">

    </form>
</body>
</html>




