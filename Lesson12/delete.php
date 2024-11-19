<?php 

include_once("config.php");

        $id = $_GET['id'];

    
        $sql = "DELETE FROM users WHERE id = :id";

        $getUsers = $pdo->prepare($sql);

        $getUsers->bindParam(':id', $id);

        $getUsers->execute();
       

        // Redirect after successful deletion
        header('Location:dashboard.php');
   



?>
