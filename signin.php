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

    <!-- Signin Section -->
    <section class="signin">
            <div class="log-bar">
                <div class="login-form">
                    <h2>Login</h2>
                    <center><h3>- Welcome back foodies -</h3></center>
                    <form action="includes/signin-process.php" method="POST">
                        <div class="login_box">
                            <label for="email">Email Address:</label>
                            <input type="email" name="email" id="email" placeholder="Enter Email Address" required/>
                        </div>
                        <div class="login_box">
                            <label for="psw">Password:</label>
                            <input type="password" name="psw" id="psw" placeholder="Enter Password" required/>
                        </div>
                        <div class="remember-forget">
                            <label><input type="checkbox"> Remember me    | </label>
                            <a href="#" id="forgetPasswordLink">Forget password</a>

                        </div>
                        <button type="submit" class="btn" name="login">Login</button>
                        <hr>
                        <div class="register">
                            <p>Don't have an account? | <a href="signup.php" class="register-link">Signup</a></p>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </section>




    <!-- Footer -->
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
  // forget pass
  const forgetPasswordLink = document.getElementById('forgetPasswordLink');

  forgetPasswordLink.addEventListener('click', function(event) {

    event.preventDefault();

    alert('Please take some time and try to remember your password again !');
  });
</script>
</body>
</html>