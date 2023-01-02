<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="payment_form.css">
    
</head>
<body>
    <section id="header">

        <a href="#"><img src="../images/Logo/logo1.png" class="logo" alt=""></a>
        
        <div>
           <ul id="navbar">       
               <li><a href="home.php">Home</a></li>
               <li><a href="shop.php">Shop</a></li>
               <li><a href="blog.html">Blog</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="contact.html">Contact Us</a></li>
               <li id="lg-bag"><a class="active" href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="logout.php">Logout</a></li>
               <a href="#" id="close"><i class="fa fa-times"></i></a>
           </ul>
        </div>

        <div id="mobile">
           <a href="cart.php"><i class="fa fa-shopping-bag icon1"></i></a>
           <button id="bar"><i class="fas fa-outdent icon1"></i></button>
        </div>
       </section>


       
   <div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="india">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="../images/Logo/pay.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

    </div>

       <script src="home.js"></script>
</body>
</html>