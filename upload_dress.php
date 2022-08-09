<?php
 include('connection.php'); 
 session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>
    <!-- Bootstrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="src/css/main.css">
</head>

<body class="category">
    <div class="container-fluid p-0">
        <nav class="navbar bg-dark navbar-expand-md navbar-dark mb-4">
            <div class="container p-0">
                <a class="navbar-brand logo" href="#">Tailor <span>Opedia</span></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse justify-content-end collapse" id="navbarCollapse">
                    <ul class="navbar-nav  mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Explore</a>
                        </li>
                        <li class="nav-item ms-md-4">
                            <a class="nav-link" href="#">Become a tailor</a>
                        </li>
                    </ul>
                    <div class="ms-md-5 d-none d-md-block">
                        <a href="#" class="ms-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" class="bi bi-bag"
                                viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <span class="d-none bg-danger text-white px-2 rounded-pill">02</span>
                        </a>
                    </div>
                    <!-- <div class="ms-md-5">
                        <a href="signin.html" class="button button-outline">Sign in</a>
                        <a href="auth.html" class="button button-secondary ms-2">Get Started</a>
                    </div> -->
                    <div class="ms-md-5 dropdown dropdown-center">
                        <div style="cursor: pointer; " class="d-flex align-items-center" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="44" height="44" class="rounded">
                            <p class="ms-md-3 text-white">
                                <?php  echo  $_SESSION['name'] ?>
                            </p>
                            <img class="ms-md-3" src="assets/image/icons/arrow-down.svg" alt="">
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#bio">Profile</a></li>
                            <li><a class="dropdown-item" href="signOut.php">sign out</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="index.php">About us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="body">
        <div class="row">
            <div class="col-lg-9 ">
                <form action="save.php" method="post" enctype="multipart/form-data">
                    <input type="text" name='name' placeholder="name">
                    <input type="number" name='cost' placeholder="cost">
                    <input type="file"  name='imagefile' placeholder="image">
                    <input type="hidden"  name='tailorid' value="<?php echo $_SESSION['id']; ?>" >
                    <input type="hidden"  id="date" name='up_time' value="time" >
                    <input type="submit" value="upload">
                </form>
            </div>
        </div>
    </div>

<script type="text/javascript">
    var d = new Date();

    // Set the value of the "date" field
    document.getElementById("date").value = d.toDateString();
</script>

  <script src="src/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>