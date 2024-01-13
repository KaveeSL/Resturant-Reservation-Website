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
            <h2>Category</h2>
            <table id="customers">
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <?php
                    $sql = "SELECT * FROM category";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                     
                        while ($row = $result->fetch_assoc()) {
                            ?>
                        <tr>
                            <td>
                                <?php echo $row['category_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <a href="category-edit.php?category_id=<?php echo $row['category_id']; ?>" class="edit-badge"
                                    title="Edit">Edit <i class=""></i></a><br>
                                <a href="category-process.php?category_id=<?php echo $row['category_id']; ?>"
                                    class="del-badge" title="Delete">  Delete<i class=""></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                    } else {
                        echo "0 results";
                    }

                    ?>
                </tr>

            </table>

            <div class="add-form">
                <h2>Add Category</h2>
            <form action="category-process.php" method="POST">
                <label for="cName">Category Name:</label>
                <input type="text" id="cName" name="cName" placeholder="Enter Category Name" required>

                <input type="submit" value="Submit" name="addCategory">
            </form>
            </div>
        </main>

    </div>
</body>

</html>