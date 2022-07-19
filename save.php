<?php
include('connection.php'); 
session_start(); 


    $name=$_POST['name'];
    $cost=$_POST['cost'];
    $time=$_POST['up_time'];
    $tailorid=$_POST['tailorid'];
    
    $image = $_FILES['imagefile']['tmp_name'];
    $img_name = $_FILES['imagefile']['name'];
    $image = base64_encode(file_get_contents(addslashes($image)));


    $sql="INSERT INTO `completed_product`(`tai_id`, `name`, `cost`, `image`, `uploaded_on`,`img_name`) 
    VALUES ($tailorid,'$name','$cost','$image','$time','$img_name')";

    

     $res = mysqli_query($conn,$sql);

     if($res==TRUE)
     {
        $_SESSION['add'] = "<div class='success'>dress Successfully uploaded</div>";
        header('location:category.php');
     }
     else
     {
        $_SESSION['add'] = "<div class='error'>Failed</div>";
        header('location:upload_dress.php');
     }

     ?>


