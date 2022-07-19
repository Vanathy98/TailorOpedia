

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Page</title>
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
                <p class="header">Not a member? <a href="auth.php">Sign up now</a></p>
                <div class="body">
                    <h3 class="mb-5">Sign in to Tailaro</h3>
                    <form action="login.php" method="post">
                        <input type="text" class="mb-4" id="Email" name="Email" placeholder="Email" required>
                        <input type="password" class="mb-4" id="Password" name="Password" placeholder="Password" required>
                        <a href="forgot.php" id="forgot">Forgot password?</a>
                        <div class="d-flex justify-content-end my-5">
                            <a href="./" class="button w-50">Back</a>
                            <input type =  "submit" id = "btn" value = "Login" class="button w-50 button-primary"/>  
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="src/js/script.js"></script>
 

    

</body>

</html>

