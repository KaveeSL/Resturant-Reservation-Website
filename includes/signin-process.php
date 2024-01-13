<?php
    session_start();
    include 'connection.php'; 

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password  = $_POST['psw'];
        
        $sql = "SELECT * FROM users AS u WHERE u.email = '$email' AND u.password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {

            while ($row = $result->fetch_assoc()) {
                $_SESSION['userID'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['usertype'] = $row['user_type'];
                $_SESSION['full_name'] = $row['full_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['city'] = $row['city'];
                $_SESSION['phone'] = $row['phone'];
            }

            // Authentication 
            $_SESSION['authenticated'] = true; 
   

            if($_SESSION['usertype'] == 'user') {
                echo "
                    <script>
                        alert('Login Successfully');
                        window.location.href = '../home.php'; 
                    </script>
                ";
            } elseif ($_SESSION['usertype'] == 'admin') {
                echo "
                    <script>
                        alert('Login Successfully');
                        window.location.href = '../admin/dashboard.php'; 
                    </script>
                ";
            }

            
           
        } else {
            echo "
            <script>
                alert('Error Login');
                window.location.href = '../signin.php'; 
            </script>
        ";
        }

    }


?>