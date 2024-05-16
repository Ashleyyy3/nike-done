<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    
    if ($result) {
        $user = $result->fetch_assoc();
        // Debugging statement
        // var_dump($user);
    } else {
        // Debugging statement
       // echo "Error: " . $mysqli->error;
    }
}



    // Debugging statement

//if (password_verify($_POST["password"], $user["Password_hash"])) {
  //  session_regenerate_id();

    //$_SESSION["user_id"] = $user["id"]; // Set the user ID in the session
    //var_dump($_SESSION["user_id"]); // Debugging statement
    //header("Location: main.php"); // Redirect to main.php
    //exit; } else {    $is_invalid = true;




?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1>">
    <title>Nike try store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,700&family=Dancing+Script:wght@400;600&family=Montserrat:ital,wght@0,300;0,400;0,500;1,200&family=Open+Sans:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">

</head>


<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  



 <!---cookies-->

 <link rel="stylesheet" type="text/css" href="cookies.css">

<div id="cookies">
    <div class="contain" >
        <div class="subcontainer">
            <div class="cookies">
                <p>This website uses cookies to ensure you get the best experience on our website.
                    <a href="#"> More info.</a></p>
                    <button id="cookies-btn">Accept</button>
            </div>
        </div>

    </div>
</div>

   <!---JS link-->
   <script src="cookie.js"></script>

    <!---header-->
    <header>

      <a href="main.php"> <img src="Photos/logoW.png" class="logo" ></a> 

        <ul class="navlist">
            <li><a href="main.php">Home</a></li>
            <li><a href="feat.html">Featured</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <div class="header-icons">
        <a href="#"><i class='bx bx-shopping-bag'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
       <a href="signup2.html"><i class='bx bx-user' ></i></i></i></a>  
         </div>

    </header>


    <!---home-->
    <section class="home" id="home">
   
    <p>You are logged in. <a href="index.html">Log out</a></p>

   


        <div class="home-text">
            <h1>Just Do it</h1>

            <p>New colors, now also available in women's sizing</p>
            <a href="feat.html" class="btn1">View Collection</a>

        </div>
    </section>


    <!---Featured-->
    <section class="featured" id="featured">
        <div class="center-text"> 

            <h2>Trending products</h2>
        </div>
        <div class="featured-content">
            <div class="row">
                <img src="Photos/BrownD.png">
                <div class="fea-text">
                    <h5>Nike Dunk Low</h5>
                    <p>Diffused Taupe</p>
                </div>
                <div class="arrow">
                    <a href="#"><i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>

            <div class="featured-content">
                <div class="row">
                    <img src="Photos/BrownD2.png">
                    <div class="fea-text">
                        <h5>Nike Dunk Low</h5>
                        <p>Cacao Wow</p>
                    </div>
                    <div class="arrow">
                        <a href="#"><i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="featured-content">
                    <div class="row">
                        <img src="Photos/BD.png">
                        <div class="fea-text">
                            <h5>Nike Dunk Low</h5>
                            <p>Panda</p>
                        </div>
                        <div class="arrow">
                            <a href="#"><i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>

                    <div class="featured-content">
                        <div class="row">
                            <img src="Photos/GrayD.png">
                            <div class="fea-text">
                                <h5>Nike Dunk Low</h5>
                                <p>Gray Fog</p>
                            </div>
                            <div class="arrow">
                                <a href="#"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>


                    </div>

    </section>

    <!---cta-->
    <section class="cta">
        <div class="cta-text">
            <h6>WINTER SALE</h6>
            <h4>20% OFF <br> NEW ARRIVAL </h4>
            <a href="feat.html" class="btn">Shop Now</a>
        </div>

    </section>
    <!---cta2-->

    <section class="new" id="new">
        <div class="center-text">
            <h2>New Arrivals</h2>
        </div>

        <div class="new-content">
            <div class="box">
                <img src="Photos/BrownD2.png" class="pics">
                <h5>Nike dunk low</h5>
                <h6>1250 kr</h6>
                <div class="sale">
                    <h4>sale</h4>
                </div>
            </div>

            <div class="box">
                <img src="Photos/RedRedD.jpg" class="pics">
                <h5>Nike dunk low</h5>
                <h6>1250 kr</h6>
                <div class="sale">
                    <h4>sale</h4>
                </div>

            </div>

            <div class="box">
                <img src="Photos/aj1B.png" class="pics">
                <h5>Nike dunk low</h5>
                <h6>1100 kr</h6>
                <div class="sale">
                    <h4>sale</h4>
                </div>

            </div>

            <div class="box">
                <img src="Photos/GrayD.png" class="pics">
                <h5>Nike dunk low</h5>
                <h6>1250 kr</h6>
                <div class="sale">
                    <h4>sale</h4>
                </div>

            </div>

            <div class="box">
                <img src="Photos/RedD.jpg" class="pics">
                <h5>Nike dunk low</h5>
                <h6>1250 kr</h6>
                <div class="sale">
                    <h4>sale</h4>
                </div>

            </div>

            <div class="box">
                <img src="Photos/aj1B.png" class="pics">
                <h5>Air Jordan low</h5>
                <h6>1299 kr</h6>
                <div class="sale">
                    <h4>sale</h4>
                </div>

            </div>


        </div>

    </section>


    <!--Reviews-->

    <section class="new" id="new">
        <div class="center-text">
            <h2>Reviews</h2>
        </div>

        <div class="new-content">
            <div class="box">
                <img src="Photos/boi.jpg" class="pics">
                <h5>John</h5>
                <h6>"These Nike Dunks in blue are absolute stunners! 
                    The color pops in person, and the comfort level is unmatched.
                     Perfect for casual wear or even light sports activities. 
                     Plus, the quality is top-notch as expected from Nike. 
                     Highly recommended!"</h6>
                     <h6 class = "stars">
                    <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i></h6> 
            </div>

            <div class="box">
                <img src="Photos/girl.jpg" class="pics">
                <h5>Johnna </h5>
                <h6>"I'm in love with my new Nike Dunks in pink!
                     The color is vibrant and adds a fun flair to any outfit.
                     I've been wearing them all day without any discomfort.
                      Definitely worth the purchase!"</h6>
                      <h6 class = "stars">
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star-half' ></i>
                    </h6> 
    
            </div>

            <div class="box">
                <img src="Photos/girl2.jpg" class="pics">
                <h5>John Doe</h5>
                <h6> "I can't get enough of my Nike Dunks in pink!
                     They're not only comfortable but also super cute. 
                     The pink color is so vibrant and adds a fun touch to my outfits.
                      Definitely, recommend them to anyone looking for a trendy yet comfortable pair of shoes!"</h6>
                      <h6 class = "stars">
                    <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star' ></i>
                     <i class='bx bxs-star-half' ></i>
                    </h6> 

            </div>


        </div>

    </section>


    <!---Contact-->
    <section class="Contact" id="Contact">
        <div class="main-contact">
            <h3>Nike</h3>
            <h5>Connect with us</h5>
            <div class="icons">
                <a href="https://www.facebook.com/nike"><i class='bx bxl-facebook-square'></i></a>
                <a href="https://www.youtube.com/user/nike"><i class='bx bxl-youtube'></i></a>
                <a href="https://www.instagram.com/nike/"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://twitter.com/Nike"><i class='bx bxl-twitter'></i></a>
            </div>

        </div>

        <div class="main-contact">
            <h3>Explore</h3>
            <li><a href="#">Home</a></li>
            <li><a href="#">Featured</a></li>
            <li><a href="#">Contact</a></li>
        </div>

        <div class="main-contact">
            <h3>Our services</h3>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Free shipping</a></li>
            <li><a href="https://mecenat.com/se">Student discount</a></li>
            <li><a href="https://www.nike.com/se/help/a/returratt-eu">Return policy</a></li>

        </div>

        <div class="main-contact">
            <h3>About Us</h3>
            <li><a href="news.html">News</a></li>
            <li><a href="https://jobs.nike.com/">Career</a></li>
            <li><a href="https://www.nike.com/se/purpose">Purpose</a></li>

        </div>

    </section>

    <div class="copy">
        <p>copyright © 2024 | Made by Ashley Owino </p>

    </div>
    

    <!---JS link-->
    <script src="more.js"></script>
</body>

</html>