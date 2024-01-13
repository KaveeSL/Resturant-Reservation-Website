<!DOCTYPE html>
<html lang="en">
<head>

<title>Search Bar Interface</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-right: none;
            border-radius: 4px 0 0 4px;
            outline: none;
            width: 300px;
        }

        button {
            padding: 10px 15px;
            border: 1px solid #333;
            border-radius: 0 4px 4px 0;
            background-color: black;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: gray;
        }

        ::placeholder {
            color: #999;
        }
    </style>


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
        
    </header>

    <section class="shop">

            <h1>Let's Check Your Meals Now</h1>
            <h3>- A Taste You Can Trust -</h3>


            <!-- Search tab -->
            <form action="search.php" method="get">
            <input type="text" name="query" placeholder="Search for products now...">
            <button type="submit"><b>Search</b></button>
        </form>

            <!-- Product Cards -->
            <div class="grid" style="display: inline-grid !important;">
            

            <?php 
                $sql = "SELECT * FROM product";
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