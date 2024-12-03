<?php 

include_once('config.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo "fill all the fields";
    }else{
        $sql = "SELECT * FROM users WHERE username = :username";
        $insertSQL = $conn->prepare($sql);
        $insertSQL->bindParam(':username', $username);

        $insertSQL->execute();

        if($tempSQL->rowCount() > 0){
            $sql = $insertSQL->fetch();
        }
    }
}



?>