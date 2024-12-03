<?php include 'db.php'; ?>



<?php

if (isset($_GET['id'])) {

  $id = $_GET['id'];

  $sql = "DELETE FROM products WHERE id = ?";

  $stmt = $pdo->prepare($sql);

  $stmt->execute([$id]);



  header("Location: dashboard.php");

}

?>
