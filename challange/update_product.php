<?php include 'db.php'; ?>



<?php

if (isset($_GET['id'])) {

  $id = $_GET['id'];

  $sql = "SELECT * FROM products WHERE id = ?";

  $stmt = $pdo->prepare($sql);

  $stmt->execute([$id]);

  $product = $stmt->fetch(PDO::FETCH_ASSOC);

}



if (isset($_POST['update_product'])) {

  $id = $_POST['id'];

  $name = $_POST['name'];

  $description = $_POST['description'];

  $price = $_POST['price'];

  $stock_quantity = $_POST['stock_quantity'];



  $sql = "UPDATE products SET name = ?, description = ?, price = ?, stock_quantity = ? WHERE id = ?";

  $stmt = $pdo->prepare($sql);

  $stmt->execute([$name, $description, $price, $stock_quantity, $id]);



  header("Location: dashboard.php");

}

?>



<form method="POST" action="update_product.php">

  <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

  <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br>

  <textarea name="description"><?php echo $product['description']; ?></textarea><br>

  <input type="number" name="price" value="<?php echo $product['price']; ?>" step="0.01" required><br>

  <input type="number" name="stock_quantity" value="<?php echo $product['stock_quantity']; ?>" required><br>

  <button type="submit" name="update_product">Update Product</button>

</form>