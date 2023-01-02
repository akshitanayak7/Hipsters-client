<?php
session_start();
$pid=$_GET['pid'];

include_once "../shared/connection.php";
$cmd="select * from products where pid='$pid'";

  $obj=mysqli_query($conn,$cmd);
  $row=mysqli_fetch_assoc($obj);

  $cmp_name=$row['cmp_name'];
  $name=$row['name'];
  $details=$row['details'];
  $price=$row['price'];
  $imname=$row['impath'];

  if(isset($_SESSION['cart'])){
    $local_cart=$_SESSION['cart'];
    $count=count($local_cart);
  }
  else{
    $count=0;
  }


echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Home</title>
        <link rel='stylesheet' href='home.css'>

        <script defer src='https://use.fontawesome.com/releases/v5.15.4/js/all.js'></script>
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
        <section id='header'>
         <a href='#'><img src='../images/Logo/logo1.png' class='logo' alt=''></a>
         
         <div>
            <ul id='navbar'>       
                <li><a href='home.php'>Home</a></li>
                <li><a class='active' href='shop.php'>Shop</a></li>
                <li><a href='blog.html'>Blog</a></li>
                <li><a href='about.html'>About</a></li>
                <li><a href='contact.html'>Contact Us</a></li>
                <li id='lg-bag'><a href='cart.php'><i class='fa fa-shopping-bag'></i></a>
                    <span class='cart-count'>
                      $count
                    </span></li>
                <li><a href='logout.php'>Logout</a></li>
                <a href='#' id='close'><i class='fa fa-times'></i></a>
            </ul>
         </div>

         <div id='mobile'>
            <a href='cart.php'><i class='fa fa-shopping-bag icon1'></i></a>
            <button id='bar'><i class='fas fa-outdent icon1'></i></button>
         </div>
        </section>

        <section id='prodetails' class='section-p1'>
            <div class='single-pro-image'>
                <img src='$imname' width='100%' id='MainImg' alt=''>
                <!--<div class='small-img-group'>
                    <div class='small-img-col'>
                        <img src='../images/Products/f1.jpg'
                        width='100%' class='small-img'
                        alt=''>
                    </div>
                    <div class='small-img-col'>
                        <img src='../images/Products/f2.jpg'
                        width='100%' class='small-img'
                        alt=''>
                    </div>
                    <div class='small-img-col'>
                        <img src='../images/Products/f3.jpg'
                        width='100%' class='small-img'
                        alt=''>
                    </div>
                    <div class='small-img-col'>
                        <img src='../images/Products/f4.jpg'
                        width='100%' class='small-img'
                        alt=''>
                    </div>
                </div>--!>
            </div>

            <div class='single-pro-details'>
                <h5>$cmp_name</h5>
                <h2>$name</h2>
                <h2>$$price</h2>
                <select>
                    <option>Select Size</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
                <a href='addToCart.php?pid=$pid'><button class='normal'>Add to Cart</button></a>
                <h4>Product Details</h4>
                <span>$details</span>
            </div>
        </section>";
?>

        <!-- <section id='product1' class='section-p1'>
            <h2>Featured Products</h2>
            <p>Check what's new</p>
            <div class='pro-container'>
                <div class='pro'>
                    <img src='../images/Products/n1.jpg' alt=''>
                    <div class='des'>
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class='start'>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href='#'><i class='fa fa-shopping-cart cart'></i></a>
                </div>

                <div class='pro'>
                    <img src='../images/Products/n2.jpg' alt=''>
                    <div class='des'>
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class='start'>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href='#'><i class='fa fa-shopping-cart cart'></i></a>
                </div>

                <div class='pro'>
                    <img src='../images/Products/n3.jpg' alt=''>
                    <div class='des'>
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class='start'>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href='#'><i class='fa fa-shopping-cart cart'></i></a>
                </div>

                <div class='pro'>
                    <img src='../images/Products/n4.jpg' alt=''>
                    <div class='des'>
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-shirts</h5>
                        <div class='start'>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href='#'><i class='fa fa-shopping-cart cart'></i></a>
                </div>

            </div>
        </section> -->

        <section id='newsletter' class='section-p1 section-m1'>
            <div class='newstext'>
                <h4>Sign Up For Newsletter</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
            </div>
            <div class='form'>
                <input type='text' placeholder='Your E-mail Address'>
                <button class='normal'>Sign Up</button>
            </div>
        </section>

        <footer class='section-p1'>
            <div class='col follow'>
                <h4>Follow Us</h4>
                <div class='icons'>
                    <i class='fab fa-facebook-f icon'></i>
                    <i class='fab fa-twitter icon'></i>
                    <i class='fab fa-instagram icon'></i>
                    <i class='fab fa-youtube icon'></i>
                </div>
            </div>

            <div class='col'>
                <h4>About Us</h4>
                <a href='#'>Delivery Information</a>
                <a href='#'>Privacy Policy</a>
                <a href='#'>Terms and conditions</a>
                <a href='#'>Contact us</a>
            </div>

            <div class='col'>
                <h4>My Account</h4>
                <a href='#'>View Cart</a>
                <a href='#'>My Orders</a>
                <a href='#'>Help</a>
            </div>
        </footer>

        <script>
            var MainImg=document.getElementById('MainImg');
            var smallimg=document.getElementsByClassName('small-img');

            smallimg[0].onclick=function(){
                MainImg.src=smallimg[0].src;
            }
            smallimg[1].onclick=function(){
                MainImg.src=smallimg[1].src;
            }
            smallimg[2].onclick=function(){
                MainImg.src=smallimg[2].src;
            }
            smallimg[3].onclick=function(){
                MainImg.src=smallimg[3].src;
            }

        </script>
        
        <script src='home.js'></script>
    </body>
</html>