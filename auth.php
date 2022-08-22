<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth Page</title>
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
                <p class="header">Not a member? <a href="signin.php">Sign In</a></p>
                <div class="body">
                    <h3>Create Account</h3>
                    <p class="my-4">what do you want to do?</p>
                    <form action="userIdentification.php" method="post">
                        <div class="inputGroup">
                            <input type="radio" value="CUSTOMER" id="option1" name="check" onclick="onlyOne(this)" />
                            <label for="option1">I want to hire a tailor</label>
                        </div>
                        <div class="inputGroup">
                            <input type="radio" value="TAILOR" id="option2" name="check" onclick="onlyOne(this)" />
                            <label for="option2">I want to work as a tailor</label>
                        </div>
                        <!-- <input type="text" placeholder="Full name"> -->
                        <div class="d-flex justify-content-end my-5">
                            <a href="./" class="button w-50">Back</a>
                            <input type =  "submit" id = "btn" value = "Countinue" class="button w-50 button-primary"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="src/js/script.js"></script>
</body>


</html>