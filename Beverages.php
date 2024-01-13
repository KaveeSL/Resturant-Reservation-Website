<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/connection.php'; 
    include 'includes/header.php';
    session_start(); 
    ?>
</head>

<body>

    <header>
        <?php
        include 'includes/menu.php';
        ?>
    </header>


    <section class="shop">
            <h1>Beverages</h1>
            <h3>- Check your Beverages now -</h3>

            <!-- Product Cards -->
            <div class="grid" style="display: inline-grid !important;">

                <?php
                $sql = "SELECT *
                FROM product
                WHERE category = 'Beverages'
                ORDER BY created_at DESC";

                $result = mysqli_query($conn, $sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <div class="product-card">

                            <div class="product-tumb">
                                <img src="assets/images/uploads/<?php echo $row['product_image']; ?>" alt="">
                            </div>
                            <div class="product-details">
                                <span class="product-catagory">
                                    <?php echo $row['category']; ?>
                                </span>
                                <h4>
                                    <?php echo $row['product_name']; ?>
                                </h4>
                                <div class="product-bottom-details">
                                    <div class="product-price">
                                       Rs. <?php echo $row['product_price']; ?>
                                    </div>
         
                                </div>
                            </div>
                        </div>
                    <?php }
                }
                ?>
            </div>
        </div>
    </section>


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