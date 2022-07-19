<?php      
    include('connection.php'); 
    session_start(); 
    $email = $_POST['Email'];  
    $password = $_POST['Password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from user where email = '$email' and password = '$password'"; 
        //customer um login pannanum 
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $username=$row['fullname'];
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           // echo"crt";
            $_SESSION["loggedin"]=true;
            $_SESSION['name']=$row['fullname'];
            header('location: index.php?name='.urlencode($row['fullname']));

            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?> 