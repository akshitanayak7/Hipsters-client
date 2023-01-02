<?php
    session_start();

    $pid=$_GET['pid'];

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=array();
    }

    $local_cart=$_SESSION['cart'];

    $status=in_array($pid,$local_cart);

    if($status){
        echo "<center><h2 style='margin-top:30px;'>Product is already available in cart !</h2></center>";
    }
    else{
    array_push($local_cart,$pid);
    $_SESSION['cart']=$local_cart; 
    // $previous=$_SERVER['HTTP_REFERER'];
    header('location:javascript:history.back()');
    }
?>