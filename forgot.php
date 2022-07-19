<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Page</title>
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
            <div class="col-lg-9">
                <div class="d-flex ms-lg-5 justify-content-between align-items-center">
                    <a href="signin.html" class="border border-secondary p-2 rounded-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </a>
                    <p class="header">Not a member? <a href="auth.php">Sign up now</a></p>
                </div>
                <div class="body">
                    <h3 class="mb-3">Forgot Password</h3>
                    <p class="mb-5">Enter the email address you used when you joined and we’ll send you instructions to
                        reset your password.</p>
                    <form action="#">
                        <input type="text" class="mb-4" placeholder="Email">
                        <div class="d-flex justify-content-end my-5">
                            <a href="signin.php" class="button w-50">Back</a>
                            <a href="resetPassword.php" class="button w-50 button-primary">Send reset Instruction</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="src/js/script.js"></script>
</body>

</html>