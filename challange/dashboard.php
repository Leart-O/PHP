<?php include 'db.php'; ?>



<h2>All Products</h2>

<table border="1">

  <tr>

    <th>ID</th>

    <th>Name</th>

    <th>Description</th>

    <th>Price</th>

    <th>Stock</th>

    <th>Actions</th>

  </tr>



  <?php

  $sql = "SELECT * FROM products";

  $stmt = $pdo->query($sql);



  while ($product = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>

        <td>{$product['id']}</td>

        <td>{$product['name']}</td>

        <td>{$product['description']}</td>

        <td>\${$product['price']}</td>

        <td>{$product['stock_quantity']}</td>

        <td>

          <a href='update_product.php?id={$product['id']}'>Edit</a> | 

          <a href='delete_product.php?id={$product['id']}'>Delete</a>

        </td>

      </tr>";

  }


  ?>

</table>
<?php

  echo"<br>";

  echo "<a href=add_product.php>Add new products</a>";
  
?>