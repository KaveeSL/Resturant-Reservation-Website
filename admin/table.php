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
            <h2>Table Reservations</h2>
            <br>
            <table id="table">
                <tr>
                    <th>User Name</th>
                    <th>E-Mail</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Guests</th>
                    <th>Contact</th>
                    <th>Confirm</th>
                </tr>
                <tr>
                <?php
                    $sql = "SELECT * FROM `table`"; 
                    $result = $conn->query($sql);

                    if ($result !== false && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                            ?>
                        <tr>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['date']; ?>
                            </td>
                            <td>
                                <?php echo $row['time']; ?>
                            </td>
                            <td>
                                <?php echo $row['guests']; ?>
                            </td>
                            <td>
                                <?php echo $row['number']; ?>
                            </td>
                            <td>
                            <label><center><input type="checkbox" fixed></center></label>
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
        </main>

    </div>
</body>

</html>