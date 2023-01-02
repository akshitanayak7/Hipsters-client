<?php
session_start();

if(isset($_SESSION['cart'])){
     $local_cart=$_SESSION['cart'];
     $count=count($local_cart);
}
else{
    $count=0;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="home.css">

        <meta http-equiv="refresh">

        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>

        <style>
            .cart-count{
                width:20px;
                height:20px;
                border-radius:50%;
                background-color:azure;
                padding:4px;
                position:absolute;
                right:-2px;
                top:-10px;
                font-weight:bold;
            }
        </style>
    </head>
    <body>
        <section id="header">
         <a href="#"><img src="../images/Logo/logo1.png" class="logo" alt=""></a>
         
         <div>
            <ul id="navbar">       
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li id="lg-bag">
                    <a href="cart.php"><i class="fa fa-shopping-bag"></i></a>
                    <span class="cart-count"><?php
                    echo "$count";
                    ?></span>
                </li>
                <li><a href="logout.php">Logout</a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
         </div>

         <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag icon1"></i></a>
            <button id="bar"><i class="fas fa-outdent icon1"></i></button>
         </div>
        </section>

        <section id="hero">
            <h4>Trade-in-offer</h4>
            <h2>Super value Deals</h2>
            <h1>On all products</h1>
            <p>Save more with coupons and up to 70% off ! </p>
            <button onclick="window.location.href='shop.php'">Shop Now</button>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
              <img src="../images/Features/feature1.png" alt="">
              <h6>Free Shipping</h6>
            </div>
              <div class="fe-box">
                <img src="../images/Features/feature2.png" alt="">
                <h6>Fast Delivery</h6>
              </div>
              <div class="fe-box">
                <img src="../images/Features/feature3.png" alt="">
                <h6>Discount Offers</h6>
              </div>
              <div class="fe-box">
                <img src="../images/Features/feature4.png" alt="">
                <h6>Trending Stuff</h6>
              </div>
              <div class="fe-box">
                <img src="../images/Features/feature5.png" alt="">
                <h6>Talk to Us</h6>
              </div>
              <div class="fe-box">
                <img src="../images/Features/feature6.png" alt="">
                <h6>Ask your doubts regarding the product</h6>
              </div>
        </section>

<?php

    include_once "../shared/connection.php";

    $mysqli_obj=mysqli_query($conn,"select * from products");

    echo "<section id='product1' class='section-p1'>
    <h2>Featured Products</h2>
    <p>Our Best Sellers</p>
    <div class='pro-container'>";

    while($row=mysqli_fetch_assoc($mysqli_obj)){
    $pid=$row['pid'];
    $cmp_name=$row['cmp_name'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];

            echo "<a style='text-decoration:none;' href='sproduct.php?pid=$pid'><div class='pro'>
                    <img src='$impath' alt=''>
                    <div class='des'>
                        <span>$cmp_name</span>
                        <h5>$name</h5>
                        <div class='start'>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                        </div>
                        <h4>$$price</h4>
                    </div>
                    <a href='addToCart.php?pid=$pid'><i class='fa fa-shopping-cart cart'></i></a>
                </div></a>";

    }

        echo "</div>
        </section>";
?>

        <section id="banner" class="section-m1">
            <h4>Repair Services</h4>
            <h2>Upto <span>70% Off</span> - All t-shirts & Accessories</h2>
            <button onclick="window.location.href='shop.php'" class="normal">Explore More</button>
        </section>

        <section id="product1" class="section-p1">
            <h2>New Arrivals</h2>
            <p>Check what's new</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="../images/Products/n1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class="start">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="../images/Products/n2.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class="start">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="../images/Products/n3.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class="start">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="../images/Products/n4.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class="start">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="../images/Products/n5.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class="start">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="../images/Products/n6.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class="start">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="../images/Products/n7.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class="start">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>

                <div class="pro">
                    <img src="../images/Products/n8.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class="start">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>

            </div>
        </section>

        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>Crazy Deals</h4>
                <h2>Buy 1 Get 1 Free</h2>
                <span>The best classic dress is on sale at Cara</span>
                <button onclick="window.location.href='shop.php'" class="white">Learn More</button>
            </div>
            <div class="banner-box banner-box2">
                <h4>Winter Collection</h4>
                <h2>Upcoming Season</h2>
                <span>The best classic dress is on sale at Cara</span>
                <button onclick="window.location.href='shop.php'" class="white">Collection</button>
            </div>
        </section>

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign Up For Newsletter</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="Your E-mail Address">
                <button class="normal">Sign Up</button>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col follow">
                <h4>Follow Us</h4>
                <div class="icons">
                    <i class="fab fa-facebook-f icon"></i>
                    <i class="fab fa-twitter icon"></i>
                    <i class="fab fa-instagram icon"></i>
                    <i class="fab fa-youtube icon"></i>
                </div>
            </div>

            <div class="col">
                <h4>About Us</h4>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms and conditions</a>
                <a href="#">Contact us</a>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <a href="#">View Cart</a>
                <a href="#">My Orders</a>
                <a href="#">Help</a>
            </div>
        </footer>

        <p class="copyright section-p1">&COPY;SMart 2022</p>
        
        <script src="home.js"></script>
    </body>
</html>