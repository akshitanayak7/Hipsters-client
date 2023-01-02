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
                <li><a href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="fa fa-shopping-bag"></i></a>
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

        <section id="page-header">
            <h2>#stayhome</h2>
            <p>Save more with coupons and up to 70% off ! </p>
        </section>

        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                    </tr>
                </thead>
<?php
    $total=0;

    echo "<tbody>";

    if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
       echo "<center><h3 style='margin-bottom:50px;margin-top:40px;'>Cart is Empty!</h3></center>";
    }

    else{
    $local_cart=$_SESSION['cart'];
    include_once "../shared/connection.php";
    $pids=implode(",",$local_cart);
    $cmd="select * from products where pid in($pids)";
    $sqli_obj=mysqli_query($conn,$cmd);

    while($row=mysqli_fetch_assoc($sqli_obj)){
        $imname=$row['impath'];
        $name=$row['name'];
        $price=$row['price'];
        $pid=$row['pid'];

               echo "<tr>
                        <td><a href='remove_cart.php?pid=$pid'><i class='far fa-times-circle'></i></a></td>
                        <td><img src='$imname' alt=''></td>
                        <td>$name</td>
                        <td>$$price</td>
                        <td><input type='number' value='1'></td>
                    </tr>";
        
        $total+=$price;
    }
  }
    echo "</tbody>
            </table>
         </section>
          <hr>
        <section id='product1' class='section-p1'>
         <div class='pro-container'>
            <div class='pro'>
               <h4><span style='font-style:bold;'>TOTAL AMOUNT : </span>$$total<h4>
            </div>
            <a style='text-decoration:none;' href='payment_form.php'><div class='pro' style='border-radius:0px;display:cover;'>
               <h4>Proceed To Pay</h4>
            </div></a>
          </div>
        </section>
        <hr>";
?>

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