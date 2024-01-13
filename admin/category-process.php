<?php
include '../includes/connection.php'; 

if(isset($_POST['addCategory'])) {
    // Retrieve the form data
    $categoryName = $_POST['cName'];

    // Insert the category data into the DB
    $sql = "INSERT INTO category (name, created_at) VALUES ('$categoryName', NOW())";

    if(mysqli_query($conn, $sql)) {
        echo "
        <script>
            alert('Category added successfully!');
            window.location.href = 'category.php'; // Redirect to the brands page
        </script>
    ";
    } else {

        echo "
            <script>
                alert('Error Adding category.');
                window.location.href = 'category.php'; // Redirect to the brands page
            </script>
        ";
    }

} elseif (isset($_POST['editCategory'])) {
    // Retrieve form data
    $categoryName = $_POST["cName"];

    $categoryID = $_POST["categoryid"];

    $sql = "UPDATE category SET name = '$categoryName', updated_at = NOW() WHERE category_id = '$categoryID'";

    if ($conn->query($sql) === TRUE) {
        echo "
            <script>
                alert('Category updated successfully.');
                window.location.href = 'category.php'; // Redirect to the brands page
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Error updating category.');
                window.location.href = 'category.php'; // Redirect to the brands page
            </script>
        ";
    }
} elseif (isset($_GET['category_id'])) { // Delete category
    $categoryid = $_GET['category_id'];

    $sql = "DELETE FROM category WHERE category_id = $categoryid";
    if ($conn->query($sql) === TRUE) {
        echo "
            <script>
                alert('category deleted successfully.');
                window.location.href = 'category.php'; 
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Error deleting category');
            window.location.href = 'category.php'; 
        </script>
    ";
    }
}

mysqli_close($conn);
?>
