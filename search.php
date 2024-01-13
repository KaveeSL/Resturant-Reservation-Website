<?php
include 'includes/connection.php';
include 'includes/header.php';
session_start();

if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];

    // search products
    $sql = "SELECT * FROM product WHERE product_name LIKE '%$searchQuery%' COLLATE utf8mb4_unicode_ci";
    $result = mysqli_query($conn, $sql);

    // Display  results
    if ($result->num_rows > 0) {
        echo '<div class="grid" style="display: inline-grid !important;">';
        while ($row = $result->fetch_assoc()) {
            // Display  cards
            
            echo " " . " ";

            echo '<div class="product-card">';
            echo '    <div class="product-tumb">';
            echo '        <img src="assets/images/uploads/' . $row['product_image'] . '" alt="">';
            echo '    </div>';
            echo '    <div class="product-details">';
            echo '        <span class="product-catagory">' . $row['category'] . '</span>';
            echo '        <h4>' . $row['product_name'] . '</h4>';
            echo '        <div class="product-bottom-details">';
            echo '            <div class="product-price">Rs. ' . $row['product_price'] . '</div>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "No results found.";
    }
}
?>
