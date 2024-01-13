<!DOCTYPE html>
<html lang="en">

<head>
    <?php
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

   
    <section class="hero">
      
    <br>
    <br>
    <br><br>
    <h1>- Signature Cuisine -<br> </h1>
    <h2>Elevate Your Palate</h2><br><br>
    <b><p style="font-size: 30px;">Experience the finest in culinary artistry at Signature Cuisine. Our skilled chefs passionately craft each dish,blending <br>
    flavors and textures to create a symphony of taste.
      From the first bite to the last,<br> indulge in a culinary journey that will leave you craving for more. <br>
      Join us and elevate your palate to new heights.</p><b>
      <br>
      <br>
      <br>
    <a href="shop.php" class="btn">CHECK OUR ALL THE DEALS</a>

    </section>



<!-- main cards -->
<section>


<ul class="cards">
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--fence"></div>
      <div class="card__content">
        <div class="card__title">Main Meals</div><br>
        <p class="card__text">Main meals are the core dishes in a meal, providing substantial sustenance and flavor. They include a variety of options like meat, seafood, or vegetarian choices and are served with accompanying side dishes.</p>
        <a href="MainMeals.php" class="btn">Check Now</a>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--river"></div>
      <div class="card__content">
        <div class="card__title">Pizzas</div><br>
        <p class="card__text"> Indulge in our delectable pizzas, featuring thin and crispy crusts topped with a savory tomato sauce and a medley of fresh ingredients. From classic flavors to unique combinations, our menu offers a variety of mouthwatering options that will satisfy your pizza cravings.</p>
        <a href="Pizza.php" class="btn">Check Now</a>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--record"></div>
      <div class="card__content">
        <div class="card__title">Beverages</div><br>
        <p class="card__text">Quench your thirst with our delightful beverages. From sodas to juices and handcrafted mocktails, our restaurant offers a refreshing selection to complement your meal. Sit back, relax, and enjoy a sip of pure satisfaction.</p>
        <a href="Beverages.php" class="btn">Check Now</a>
      </div>
    </div>
  </li>

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