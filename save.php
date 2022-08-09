<?php
include('connection.php'); 
session_start(); 


    $name=$_POST['name'];
    $cost=$_POST['cost'];
    $time=$_POST['up_time'];
    $tailorid=$_POST['tailorid'];
    
    $image_name = $_FILES['imagefile']['name'];
    
        $ext =end(explode('.',$image_name));

        $image_name = "dress_".rand(000,999).'.'.$ext;

        $source_path = $_FILES['imagefile']['tmp_name'];
        
        $destination_path = "./assets/image/dress/".$image_name;

        $upload = move_uploaded_file($source_path,$destination_path);
        

    $sql="INSERT INTO `completed_product`(`tai_id`, `name`, `cost`,`uploaded_on`,`img_name`) 
    VALUES ($tailorid,'$name','$cost','$time','$image_name')";

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


