<?php
session_start();
include 'connection.php'; 

if (isset($_POST['signup'])) {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (`username`, `password`, `full_name`, `email`, `reg_date`) 
            VALUES ('$username', '$password', '$fullName', '$email', NOW())";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
            <script>
                alert('Registration successful! Please sign in with your account.');
                window.location.href = '../signin.php'; // Redirect to the login page
            </script>
        ";

        exit(); 
    } else {
        echo "
            <script>
                alert('Registration Failed.');
                window.location.href = '../signup.php'; // Redirect back to the signup page
            </script>
        ";
    
        exit(); 
    }
}
?>
