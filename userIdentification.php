<?php  
 include('connection.php');
 session_start();
 
 $check="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {  
     
      $check = test_input($_POST["check"]);  
 } 
 
$_SESSION['check'] = $check;



//  if($check=="work"){
//     header("location: signupTailor.php");
//  }else{
//     header("location: signupCustomer.php");
//   }
     
    function test_input($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
      } 
      header("location: signup.php");
 ?>