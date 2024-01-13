<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../includes/connection.php'; 
  include '../includes/header.php';
  session_start(); 
  ?>
  <link rel="stylesheet" href="assets/admin-style.css">
</head>

<body>

<style>
.admin__nav {
  display: flex; 
}

.menu {
  list-style: none; 
  display: flex; 
}

.menu__item {
  margin-right: 10px; 
}

.menu__link {
  text-decoration: none;
  color: #000; 
  padding: 5px 10px; 
}
</style>


    </header>
    <nav class="admin__nav">
      <ul class="menu">
        <li class="menu__item">
          <a class="menu__link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="products.php">Products</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="category.php">Category</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="users.php">Users</a>
        </li>
        <li class="menu__item">
        <a class="menu__link" href="table.php">Table</a>
      </li>
        <li class="menu__item">
          <a class="menu__link" href="../logout.php">Log out</a>
        </li>
      </ul>
    </nav>
    <main class="admin__main">
      <h2>Add Product</h2>
      <form action="product-process.php" method="POST" enctype="multipart/form-data">
        <label for="pname">Product Name:</label>
        <input type="text" id="pname" name="pname" placeholder="Enter Product Name" required>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" placeholder="Enter Product Price"required>


        <label for="pCode">Product Code:</label>
        <input type="text" id="pCode" name="pCode" placeholder="Enter Product Code"required>

        <label for="img">Product Image:</label>
        <input type="file" id="img" name="img"required>

        <label for="category">Category:</label>
        <?php
        // Retrieve categorys from the database
        $sql_category = "SELECT * FROM category";
        $sql_category_run = $conn->query($sql_category);

        // Check if there are any categorys
        if ($sql_category_run->num_rows > 0) {
          ?>
          <select name="category" id="category">
            <?php
            // Loop through each category
            while ($row_category = $sql_category_run->fetch_assoc()) {
              $categoryName = $row_category['name'];
              ?>
              <option value="<?php echo $categoryName; ?>"><?php echo $categoryName; ?></option>
              <?php
            }
            ?>
          </select>
          <?php
        } else {
          echo "No categorys found.";
        }
        ?>

        <input type="submit" value="Submit" name="addItem">
      </form>
    </main>

  </div>
</body>

</html>