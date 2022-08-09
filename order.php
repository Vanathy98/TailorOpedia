<?php
include('connection.php'); 
session_start(); 

    print_r($_POST);
    $dress_id=$_POST['dress_id'];
    $customer_id=$_POST['customer_id'];
    $tailor_id=$_POST['tailor_id'];
    $amount=$_POST['amount'];
    $qty=$_POST['qty'];
    $address=$_POST['address'];
    $card=$_POST['card'];


    $sql="INSERT INTO `sales_order`(`dress_id`, `customer_id`, `tailor_id`, `qty`, `address`, `amount`, `card`) VALUES
     ('$dress_id','$customer_id','$tailor_id','$amount','$qty','$address','$card')";

     $res = mysqli_query($conn,$sql);

     if($res==TRUE)
     {
        $_SESSION['ordered'] = "<div style='color:green;'>Dress Successfully ordered</div>";
        header('location:cart.php?id='.$customer_id.'&dress_id='.$dress_id);
     }
     else
     {
        $_SESSION['add'] = "<div class='error'>Failed</div>";
        header('location:cart.php');
     }

     ?>


