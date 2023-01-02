<?php
  session_start();

  $pid=$_GET['pid'];
  $local_cart=$_SESSION['cart'];
  $local_cart=\array_diff($local_cart,["$pid"]);
  $_SESSION['cart']=$local_cart;
  header('location:cart.php');

?>