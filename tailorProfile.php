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
    <title>TailorProfile Page</title>
    <!-- Bootstrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="src/css/main.css">
</head>

<body class="details">
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
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="bg-white text-center p-4 rounded-10 profile-area">
                    <img src="assets/image/avatar/avatar-1.jpg"
                        style="height: 120px; width:120px; border-radius: 50%; margin-top: 20px;" alt="">
                    <p class="h4 mt-3">Aormac Thomas</p>
                    <p class="text-muted">Let me illuminate your ideas through</p>
                    <a href="measurment.php"><div class="button button-primary my-5">Hire Thomas</div></a>
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
                        <p><span>30 Minutes ago</span></p>
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
                </div>
                <div class="d-flex bg-white p-4 rounded-10 mt-3">
                    <img src="assets/image/icons/Medal.svg" alt="">
                    <div class="ms-3">
                        <h4>People keep coming back</h4>
                        <p style="font-size: 16px; line-height:24px; margin-top: 8px;">logoflow has an exceptional
                            number of repeat buyers.</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-10 mt-3">
                    <h4>Description</h4>
                    <p style="font-size: 14px; line-height: 24px; margin-top: 10px;">Hi, Thomas here. I am a
                        professional graphic designer
                        with an experience of 10+ years. Let my field of expertise collaborate with your level of
                        imagination, so together we can create an exceptional brand image. Something which creates an
                        impact. Impact which screams for its acknowledgment without you needing to do so. Let us make
                        wonders together in this field of designing. Keep exploring.</p>
                </div>
                <div class="bg-white p-4 rounded-10 mt-3">
                    <h4 class="mb-3">Skills</h4>
                    <span class="badges">Multitasking</span>
                    <span class="badges">Time management</span>
                    <span class="badges">Excellent sense of style and color</span>
                    <span class="badges">Design and conceptual</span>
                    <span class="badges">Presentation</span>
                    <span class="badges">Presentation</span>
                    <span class="badges">Communication</span>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/card-image.png" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5>Men Casual Shirt</h5>
                                        <div class="badge d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            &nbsp;
                                            5.0
                                        </div>
                                    </div>
                                    <!-- Tailor and price -->
                                    <div class="d-flex mt-3 align-items-end justify-content-between">
                                        <div class="detail  d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span>Aormac Thomas</span></p>
                                                <small>delivered in 5 days </small>
                                            </div>
                                        </div>
                                        <h5>Rs 1400</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="src/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>