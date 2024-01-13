<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include 'includes/header.php';
    ?>
</head>
<body>


    <header>
        <?php 
            include 'includes/menu.php'; 
        ?>
    </header>

    <!-- signup Section -->
    <section class="signin">
            <div class="log-bar">
                <div class="login-form">
                    <h2>Signup</h2>
                    <center><h3>- Register now with Signature Cuisine -</h3></center>
                    <form action="includes/signup-process.php" method="POST" onsubmit="return checkPassword()">
                        <div class="login_box">
                            <label for="fullName">Name:</label>
                            <input type="text" name="fullName" id="fullName" placeholder="Enter Your Name" required/>
                        </div>
                        <div class="login_box">
                            <label for="email">Email Address:</label>
                            <input type="email" name="email" id="email" placeholder="Enter Email Address" required/>
                        </div>
                        <div class="login_box">
                            <label for="username">Username:</label>
                            <input type="text" name="username" id="username" placeholder="Enter username" required/>
                        </div>
                        <div class="login_box">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" placeholder="Enter Password" required/>
                        </div>
                        <div class="login_box">
                            <label for="conPassword">Re-enter Password:</label>
                            <input type="password" name="conPassword" id="conPassword" placeholder="Re-enter Password" required/>
                        </div>
                    
                        <button type="submit" class="btn" name="signup">Signup</button>
                        <hr>
                        <div class="register">
                            <p>Already have an account? | <a href="signin.php" class="register-link">Signin</a></p>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </section>


    <!-- Footer  -->
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

    <script>
        // Check confirm Password
        function checkPassword() {
            const password = document.getElementById("password").value;
            const rePassword = document.getElementById("conPassword").value;

            if(password != rePassword) {
                alert("Password Mismatch!");
                return false;
            } else {
                alert("Success!");
                return true;
            }
        }
    </script>
    
</body>
</html>