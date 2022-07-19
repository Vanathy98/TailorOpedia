<?php  
 include('connection.php');
session_start();

$check = $_SESSION['check'];



$fnameErr = "";  
$emailErr = "";   
$passErr = "";  
$fname = "";  
$email = "";  
$password = "";  
$address = "";  
$postelcode = ""; 

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  if (empty($_POST["fname"])) {  
    $fnameErr = "fname Field is required";  
  } else {  
    $fname = test_input($_POST["fname"]);  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {  
      $fnameErr = "Only letters and white space allowed";  
    }  
  }  
    if (empty($_POST["email"])) {  
    $emailErr = "Email field is required";  
  } else {  
    $email = test_input($_POST["email"]);  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
      $emailErr = "Invalid email format";  
    }  
  } 
  if (empty($_POST["password"])) {  
    $passErr = "Email field is required";  
  } else {  
    $password = test_input($_POST["password"]);  
  }  
   
    $address = test_input($_POST["address"]);  
    $postelcode = test_input($_POST["postelcode"]); 
   
}  
function test_input($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
 

  if(mysqli_query($conn, "INSERT INTO user (fullname,email,password,address,postelcode,role) VALUES ('" . $fname . "', '" . $email . "', '" . $password . "', '" . $address . "','" . $postelcode . "','".$check."');")) {
       header("location: signin.php");
    } 
    else {
       echo "Error: ";
    }
    
   
 
?>  