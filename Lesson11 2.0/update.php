<?php

include_once('config.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    // Validate and sanitize input
    if (!is_numeric($id) || empty($username) || empty($name) || empty($surname) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid input data.";
        exit;
    }

    try {
        $sql = "UPDATE users SET username=:username, name=:name, surname=:surname, email=:email WHERE id=:id";
        $prep = $conn->prepare($sql);

        // Bind parameters with specific data types
        $prep->bindParam(':id', $id, PDO::PARAM_INT);
        $prep->bindParam(':username', $username);
        $prep->bindParam(':name', $name);
        $prep->bindParam(':surname', $surname);
        $prep->bindParam(':email', $email);

        // Execute the statement
        $prep->execute();

        // Redirect to dashboard
        header("Location:dashboard.php");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
