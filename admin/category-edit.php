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
            <div class="add-form">
                <h2>Edit Category</h2>
                <?php

                if (isset($_GET['category_id'])) {
                    $categoryid = $_GET['category_id'];

                    // Retrieve the existing category data from the database
                    $sql = "SELECT * FROM category WHERE category_id = $categoryid";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();

                        // Display the update form 
                        ?>
                        <form action="category-process.php" method="POST">
                            <input type="hidden" id="categoryid" name="categoryid" value="<?php echo $row['category_id']; ?>">

                            <label for="cName">category Name:</label>
                            <input type="text" id="cName" name="cName" value="<?php echo $row['name']; ?>">

                            <input type="submit" value="Submit" name="editCategory">
                        </form>
                        <?php
                    } else {
                        echo "Category not found.";
                    }
                }
                ?>
            </div>
        </main>

    </div>
</body>

</html>