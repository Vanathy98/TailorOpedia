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
    <title>Details Page</title>
    <!-- Bootstrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="src/css/main.css">
</head>

<body class="details">
    <div class="container-fluid p-0">
        <nav class="navbar bg-dark navbar-expand-md navbar-dark mb-4">
            <div class="container p-0">
            <?php   
                        $id = $_GET['id'];
                        $sql = "SELECT completed_product.id AS dress_id,
                        completed_product.name AS dress_name,
                        completed_product.cost AS dress_cost,
                        completed_product.name AS dress_name,
                        completed_product.uploaded_on AS uploaded_on,
                        completed_product.img_name AS img_name,
                        completed_product.tai_id AS tai_id,
                        user.fullname AS fullname,
                        user.id AS user_id
                        FROM completed_product
                        LEFT JOIN user
                        ON completed_product.tai_id = user.id WHERE completed_product.id = $id";
                        $res = mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($res);
                        $name = $row['dress_name'];
                        $cost=$row['dress_cost'];
                        $uploaded_on = $row['uploaded_on'];
                        $img=$row['img_name'];
                        $tailor=$row['fullname'];
                        $tailor_id=$row['tai_id']
                ?>
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
                            <p class="ms-md-3 text-white"> <?php  echo  $_SESSION['name'] ?></p>
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
    <div class="container p-0">
        <h3 class="pt-5"><?php echo $name; ?></h3>
        <div class="row view-product">
            <div class="col-lg-8">
                <img src="assets/image/dress/<?php echo $img;?>" alt="detail-image.jpg">
                <div class="row bg-white p-3 mt-5 mx-0 rounded-10">
                    <div class="col-lg-7 my-3">
                        <h4 class="mb-3">Product Story</h4>
                        <p>This Product is of one of many design kinds we offer. Flat design concepts are one of our
                            fortes. For the logo to be timeless it doesn’t need to be with complex</p>
                    </div>
                    <div class="col-lg-5 my-3">
                        <h4 class="mb-3">Material information</h4>
                        <p>Lising: 100% Polyester</p>
                        <p>Shell: 100% Polyester</p>
                    </div>
                    <div class="col-lg-7 my-3">
                        <h4 class="mb-3">Product highlights</h4>
                        <p>Relaxed Fit</p>
                        <p>Full Zip closure with stand up collar</p>
                        <p>Dual side pockets</p>
                        <p>Embroidered Badge at left chest</p>
                        <p>Standard fit has a relaxed, easy feel</p>
                    </div>
                    <div class="col-lg-5 my-3">
                        <h4 class="mb-3">Product Details</h4>
                        <p>Cool Iron</p>
                        <p>Do Not Bleach</p>
                        <p>Do Not Dry Clean</p>
                        <p>Machine Wash in Cool Water</p>
                        <p>Tumble Dry At Low Temperature</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center bg-white p-4 rounded-10">
                    <img src="assets/image/avatar/user.png"
                        style="height:60px; width: 60px;background: #ffbc85; margin-right: 20px;" alt="">
                    <div class="ms-2">
                        <h3><?php echo $tailor; ?></h3>
                        <p>Professional Fashion Designer </p>
                    </div>
                </div>
                <div class="bg-white p-4 my-4 rounded-10">
                    <div class="d-flex justify-content-between mb-3">
                        <p>From</p>
                        <p><span>Jaffna Point pedro</span></p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p>Avg. response time</p>
                        <p><span>2 Hours</span></p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p>Last delivery</p>
                        <p><span><?php echo $uploaded_on; ?></span></p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p>From</p>
                        <p><span>Jaffna Point pedro</span></p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p>Finised job</p>
                        <p><span>2461 Oders</span></p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p>Total reviews</p>
                        <p><span class="text-warning">★ 4.9 </span>(2460)</p>
                    </div>

                    <a href="measurment.php?id=<?php echo $tailor_id;?>&dress_id=<?php echo $id;?>"><div class="button button-primary py-3 mt-5 mb-3">Hire <?php echo $tailor; ?></div></a>
                    <a href="tailorProfile.php"><div class="button button-outline py-3">View portfolio</div></a>
                </div>
            </div>
        </div>
    </div>
    <script src="src/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>