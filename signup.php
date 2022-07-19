<?php
     include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <!-- Bootstrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="src/css/main.css">
</head>

<body>
    <div class="container-fluid auth">
        <div class="row">
            <div class="col-lg-3 p-0 position-relative d-none d-lg-block">
                <div class="sidebar position-sticky sticky-top w-100">&nbsp;</div>
            </div>
            <div class="col-lg-9 ">
                <p class="header">Already a member? <a href="signin.php">Sign In</a></p>
                <div class="body">
                    <h3 class="mb-5">Sign up as Tailaro</h3>
                    <form action="register.php" method="POST">
                        <input type="text" class="mb-4" placeholder="Full Name" name="fname">
                        <input type="email" class="mb-4" placeholder="Email" name="email">
                        <input type="password" class="mb-4" placeholder="Password" name="password">
                        <input type="text" class="mb-4" placeholder="Address" name="address">
                        <input type="int" class="mb-4" placeholder="Postel code" name="postelcode">
                        <div class="d-flex justify-content-end my-5">
                            <a href="auth.php" class="button w-50">Back</a>
                            <input type =  "submit" id = "btn" value = "signup" class="button w-50 button-primary"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="src/js/script.js"></script>



   
</body>

</html>