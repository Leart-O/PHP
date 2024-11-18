<?php 

include_once("config.php");

// Check if 'id' is set and is a valid integer
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id']; // Cast to integer for additional safety

    try {
        $sql = "DELETE FROM users WHERE id = :id";
        $deleteUser = $conn->prepare($sql);
        $deleteUser->bindParam(':id', $id, PDO::PARAM_INT); // Explicitly set parameter type
        $deleteUser->execute();

        // Redirect after successful deletion
        header('Location: dashboard.php');
        exit; // Ensure no further code is executed
    } catch (PDOException $e) {
        // Handle error if needed
        echo "Error: " . $e->getMessage();
    }
} else {
    // Redirect if 'id' is not set or invalid
    header('Location: dashboard.php');
    exit;
}

?>
