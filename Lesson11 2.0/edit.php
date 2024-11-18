<?php

include_once("Config.php");

//Check if 'id' is set and a valid integer

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = (int)($_GET['id']); //Cast to integer safely
}


try {
    $sql = " SELECT * users WHERE id = :id ";

    $prep = $pdo->prepare($sql);

    $prep->bindParam(':id', $id, PDO::PARAM_INT) //bind as integer
    $prep->execute();

    $data= $prep->fetch();

    // Check if data is found
    if(!$data){
        echo "No user found with ID $id.";
        exit;
    }
 catch (PDOException $e) {
    echo "Error" . $e->getMessage();
    exit;
} else{
    // Redirect or show an error if "id" is not set or invalid
    header('Location: dashboard.php');
    exit;
 }
     
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?=htmlspecialchars($data['id'])?>"><br>
        <input type="text" name="username" value="<?=htmlspecialchars($data['username'])?>"><br> 
        <input type="text" name="surname" value="<?=htmlspecialchars($data['name'])?>"><br>
        <input type="email" name="email" value="<?=htmlspecialchars($data['email'])?>"><br>
        <br><br>
        <button type="submit">UPDATE</button>
    </form>
    <a href="dashboard.php">Dashboard</a>
</body>
</html>