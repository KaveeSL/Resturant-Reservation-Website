<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/header.php';
    session_start(); 
    ?>
    <style>
        .container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}
@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}

    </style>
    <header>
        <?php
        include 'includes/menu.php';
        ?>
</head>

<body>
<center><br>
<h1>- Table Reservation -</h1><br>
<h3>Book your table now</h3><br>
</center>

<?php
//validation
if (isset($_POST['submit'])) {
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        echo "<center><b><p style='color: red;'>Please SIGN IN to reserve a table</p></b></center>";
    } else {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $guests = $_POST['guests'];
        $number = $_POST['number'];


        $servername = "localhost";
        $username = "root";
        $password = '';
        $database = "laura";

        $connection = mysqli_connect($servername, $username, $password, $database);

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO `table` (name, email, date, time, guests, number) VALUES ('$name', '$email', '$date', '$time', '$guests', '$number')";

        if (mysqli_query($connection, $sql)) {
            echo "<center><b><p style='color: green;'>Table reserved successfully</p></b></center>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }

        mysqli_close($connection);
    }
}
?>







<center>
                <div class="login-form">
  <form id="reservationForm" onsubmit="return validateForm()" method="post">
  <div class="login_box">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
</div>
<div class="login_box">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    </div>
    <div class="login_box">
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>
    </div>
    <div class="login_box">
    <label for="time">Time:</label>
    <input type="time" id="time" name="time" required>
    </div>
    <div class="login_box">
    <label for="guests">Number of Guests:</label>
    <input type="number" id="guests" name="guests" min="1" required>
    </div>
    <div class="login_box">
    <label for="number">Contact No:</label>
    <input type="text" id="number" name="number" required><br>
</div>

    <input type="submit" class="btn" value="Reserve Table" name="submit">
  </form></center>
  <center>
  
  <h3>For more details contact us through the below email or number</h3>
</center>
<br>
  <script>
    
    function validateForm() {

      clearErrors();

      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var date = document.getElementById("date").value;
      var time = document.getElementById("time").value;
      var guests = document.getElementById("guests").value;
      var number = document.getElementById("number").value;


      // Validate inputs
      var isValid = true;
      if (name === "") {
        displayError("Please enter your name.");
        isValid = false;
      }

      if (email === "") {
        displayError("Please enter your email address.");
        isValid = false;
      } else if (!isValidEmail(email)) {
        displayError("Please enter a valid email address.");
        isValid = false;
      }

      if (date === "") {
        displayError("Please enter the reservation date.");
        isValid = false;
      }

      if (time === "") {
        displayError("Please enter the reservation time.");
        isValid = false;
      }

      if (guests === "") {
        displayError("Please enter the number of guests.");
        isValid = false;
      } else if (guests < 1) {
        displayError("Please enter a valid number of guests.");
        isValid = false;
      }
      if (number === "") {
        displayError("Please enter valid number.");
        isValid = false;
      }

      return isValid;
    }

    function displayError(errorMessage) {
      var errorElement = document.createElement("p");
      errorElement.style.color = "red";
      errorElement.innerHTML = errorMessage;
      document.body.appendChild(errorElement);
    }

    function clearErrors() {
      var errorElements = document.getElementsByTagName("p");
      for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].remove();
      }
    }

    function isValidEmail(email) {
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailPattern.test(email);
    }
   
  </script>

    <footer><center>
        
                <div class="footer-col">
                  
                <center><img src="assets/images/logo2.png" alt="logo" class="footer-logo-img"></center>
                    <div class="contact">
                        <a href="#"><i class="ri-mail-line"></i> SignatureCuisine@mail.com</a>
                        <a href="#"><i class="ri-phone-line"></i> +9422566445</a>
                    </div>
                    <div class="social-icon">
                        <a href="https://web.facebook.com/" title="facebook">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" title="instagram">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" title="twitter">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="https://www.linkedin.com/" title="linkedin">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</center>
    </footer>


</body>

</html>