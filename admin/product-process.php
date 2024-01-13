<?php
include '../includes/connection.php'; 

if (isset($_POST['addItem'])) {
    // get form data
    $productName = $_POST["pname"];
    $price = $_POST["price"];
    $productCode = $_POST["pCode"];
    $category = $_POST["category"];

    $img = $_FILES['img']['name'];
    $imgTmp = $_FILES['img']['tmp_name'];

    // Set the target directory for uploading the product img
    $targetDirectory = "../assets/images/uploads/";

    // Generate a unique filename for the product img
    $productImgName = uniqid() . '_' . $img;

    // Set the target path for the product img
    $targetFilePath = $targetDirectory . $productImgName;

    // Move the uploaded product img to the target directory
    if (move_uploaded_file($imgTmp, $targetFilePath)) {

        $sql = "INSERT INTO product (product_name, product_price, product_image, product_code, category,created_at) 
                VALUES ('$productName', '$price', '$productImgName', '$productCode', '$category', NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "
            <script>
                alert('Product Added successfully.');
                window.location.href = 'products.php'; 
            </script>
        ";
        } else {
            echo "
            <script>
                alert('Error Adding Product');
                window.location.href = 'products.php'; 
            </script>
        ";
        }
    }
} elseif (isset($_POST['editItem'])) {

    $productID = $_POST["productID"];
    $productName = $_POST["pname"];
    $price = $_POST["price"];
    $productCode = $_POST["pCode"];
    $category = $_POST["category"];

    $img = $_FILES['img']['name'];
    $imgTmp = $_FILES['img']['tmp_name'];


    $targetDirectory = "../assets/images/uploads/";


    $productImgName = uniqid() . '_' . $img;


    $targetFilePath = $targetDirectory . $productImgName;


    if ($img != '') {
        if (move_uploaded_file($imgTmp, $targetFilePath)) {

            $sql = "UPDATE `product` 
            SET `product_name`='$productName',
                `product_price`='$price',
                `product_code`='$productCode',
                `product_image`='$productImgName',
                `category`='$category',
                `updated_at`=NOW() 
            WHERE `product_id`='$productID'";
     
        }
    } else {

        $sql = "UPDATE `product` 
        SET `product_name`='$productName',
            `product_price`='$price',
            `product_code`='$productCode',
            `category`='$category',
            `updated_at`=NOW() 
        WHERE `product_id`='$productID'";
    }

    if ($conn->query($sql) === TRUE) {
        echo "
            <script>
                alert('Product updated successfully.');
                window.location.href = 'products.php'; 
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Error updating Product');
                window.location.href = 'products.php'; 
            </script>
        ";
    }


} elseif (isset($_GET['product_id'])) { // Delete product 
    $productid = $_GET['product_id'];


    $sql = "DELETE FROM product WHERE product_id = $productid";
    if ($conn->query($sql) === TRUE) {
        echo "
            <script>
                alert('Product deleted successfully.');
                window.location.href = 'products.php'; 
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Error deleting Product');
            window.location.href = 'products.php'; 
        </script>
    ";
    }
}

?>