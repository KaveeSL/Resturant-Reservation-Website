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
.container > div {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background-color: #f1f2f9;
    direction: rtl;
}

.slider {
    width: 1000px;
    margin: 200px;

}
.container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px,200px));
    grid-template-rows: 200px 200px;
    gap: 15px;
    grid-auto-flow: dense;
}
.overlay {
    position: absolute;
    z-index: 100;
    width: 100%;
    min-height: 100px;
    max-height: auto;
    bottom: 0;
    border-radius: 0 0 10px 10px;
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.87));
}
.overlay h3 {
    padding: 20px;
    padding-bottom: 0;
    color: #fff;
}
.box-image {
    object-fit: cover;
    border-radius: 10px;
    height: 100%;
    width: 100%;
}

.first {
    position: relative;
    grid: 5/3;
    grid-row: 1/-1;
    grid-column: 1/3;
}
.second {
    grid-column: -1/3;
}
.third {
    grid-row: 2/2;
}
.fourth {
    grid-row: 2/2;
}

    </style>
</head>

<body>
    <header>
        <?php
            include 'includes/menu.php';
        ?>
    </header>

    <br><br>
    <center><h2>About Us</h2><br>
    <h3><h1>- Signature Cuisine -</h1><br>
Signature Cuisine takes pride in offering a diverse and exquisite range of<br> 
culinary delights, carefully crafted by our team of experienced chefs. <br>
From traditional local dishes to international flavors, we strive to <br>
cater to the diverse preferences of our valued customers.
<br><br>
<h2>Elegant Ambience</h2><br>
Our restaurants are designed to create a warm and inviting atmosphere for <br>
our guests. With tasteful decor, comfortable seating, and ambient lighting, <br>
we ensure that every visit to Signature Cuisine is a memorable and <br>
enjoyable experience.
<br><br>
<h2>Professional Staff</h2><br>
At Signature Cuisine, we believe that excellent service is as important as <br>
exceptional food. Our dedicated team of hospitality professionals is <br>
trained to provide attentive and personalized service, ensuring that <br>
every customer feels valued and well taken care of.
<br><br>
<h2>Extensive Menu Options</h2><br>
Our menu features an extensive selection of dishes to cater to different <br>
tastes and dietary preferences. From mouthwatering appetizers and main <br>
courses to delectable desserts, there is something for everyone at <br>
Signature Cuisine.
<br><br>
<h2>Special Events and Catering Services</h2><br>
We offer specialized services for hosting private events, parties, and <br>
corporate gatherings. Our experienced event planners and culinary <br>
experts work closely with clients to create customized menus and <br>
ensure seamless execution for a truly memorable event.
<br><br>
<h2>State-of-the-Art Facilities</h2><br>
Signature Cuisine is equipped with state-of-the-art facilities to meet the <br>
needs of our guests. Our restaurants feature spacious dining areas, <br>
well-equipped kitchens, and advanced technologies to provide a <br>
comfortable and efficient dining experience.<br><br>

<h2>These are our main Facilities</h2><br>
<ul><b>
  <li><h3>Bar Area</h3></li>
  <li><h3>Private Lounges</h3></li>
  <li><h3>Pool Tables</h3></li></b>
  <li><h3>SwimmingPool</h3></li></b>
</ul>

<center>
    <div class="slider">
    <div class="container">
            <div class="first">
                <img class="box-image" src="assets\images\gallery\ab1.jpg" alt="">
            </div>
            <div class="second">
                <img class="box-image" src="assets\images\gallery\ab2.jpg" alt="">
            </div>
            <div class="third">
                <img class="box-image" src="assets\images\gallery\ab3.jpg" alt="">

            </div>
            <div class="fourth">
                <img class="box-image" src="assets\images\gallery\ab4.jpg" alt="">
            </div>
            
        </div>
    </div>
</center>
<center>
<h2>- Thankyou for choosing us. A Taste You Can Trust -</h2>
<br><br>

</center>
</h3>


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