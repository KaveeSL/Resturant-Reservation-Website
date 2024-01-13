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
      <h2>Dashboard</h2>
      <div class="row">
        <div class="card">
          <h3>Listed Products</h3>
          <h1>
            <?php
            $sql = "SELECT COUNT(*) AS total_product FROM product";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $totalRows = $row['total_product'];
              echo $totalRows;

            } else {
              echo "0 results";
            }

            ?>
          </h1>
          <a href="products.php">View All</a>
        </div>
        
        <div class="card">
          <h3>Listed Categories</h3>
          <h1>
            <?php
            $sql = "SELECT COUNT(*) AS total_category FROM category";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $totalRows = $row['total_category'];
              echo $totalRows;

            } else {
              echo "0 results";
            }

            ?>
          </h1>
          <a href="category.php">View All</a>
        </div>
        <div class="card">
          <h3>Registered Userss</h3>
          <h1>
            <?php
            $sql = "SELECT COUNT(*) AS total_users FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $totalRows = $row['total_users'];
              echo $totalRows;

            } else {
              echo "0 results";
            }

            ?>
          </h1>
          <a href="users.php">View All</a>
        </div>

        <div class="card">
  <h3>Table Orders</h3>
  <h1>
    <?php
    $sql = "SELECT COUNT(*) AS total_table FROM `table`"; 
    $result = $conn->query($sql);

    if ($result !== false && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $totalRows = $row['total_table'];
      echo $totalRows;
    } else {
      echo "0 results";
    }

    ?>
  </h1>
  <a href="table.php">View All</a>
</div>



    </main>

  </div>
</body>

</html>