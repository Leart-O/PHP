<?php include 'db.php'; ?>



<form method="POST" action="add_product.php">

  <input type="text" name="name" placeholder="Product Name" required><br>

  <textarea name="description" placeholder="Product Description"></textarea><br>

  <input type="number" name="price" placeholder="Price" step="0.01" required><br>

  <input type="number" name="stock_quantity" placeholder="Stock Quantity" required><br>

  <button type="submit" name="add_product">Add Product</button>

</form>



<?php

if (isset($_POST['add_product'])) {

  $name = $_POST['name'];

  $description = $_POST['description'];

  $price = $_POST['price'];

  $stock_quantity = $_POST['stock_quantity'];



  $sql = "INSERT INTO products (name, description, price, stock_quantity) VALUES (?, ?, ?, ?)";

  $stmt = $pdo->prepare($sql);

  $stmt->execute([$name, $description, $price, $stock_quantity]);



  echo "Product added successfully!";

  echo"<br>"

  echo "<a href=dashboard.php>Check Out the products</a>";

}

?>

