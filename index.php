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
    <title>Tailopidia</title>
    <!-- Bootstrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="src/css/main.css">
</head>

<body>

<!-- ========Hero Section=========================================== -->
    <header>
        <div class="container py-2">
            <nav class="navbar navbar-expand-md navbar-light mb-4">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-bag" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                                <span class="d-none bg-danger text-white px-2 rounded-pill">02</span>
                            </a>
                        </div>
                        <div class="ms-md-5">
                           
                              
                            <?php
                               
                               if(isset($_SESSION["loggedin"]) ) {
                                echo "    <div class='dropdown text-end'>
                                <a href='#' class='d-block link-dark text-decoration-none dropdown-toggle' id='dropdownUser1'
                                    data-bs-toggle='dropdown' aria-expanded='false'>
                                    <img src='https://github.com/mdo.png' alt='mdo' width='32' height='32'
                                        class='rounded-circle'>
                                </a>".$_GET['name']."
                                <ul class='dropdown-menu text-small' aria-labelledby='dropdownUser1'>
                                    <li><a class='dropdown-item' href='#'>New project...</a></li>
                                    <li><a class='dropdown-item' href='#'>Settings</a></li>
                                    <li><a class='dropdown-item' href='#'>Profile</a></li>
                                    <li>
                                        <hr class='dropdown-divider'>
                                    </li>
                                    <li><a class='dropdown-item' href='signout.php'>Sign out</a></li>
                                </ul>
                            </div>";
                                }else{
                                    echo" <a href='signin.php' class='button button-outline'>Sign in</a>
                                    <a href='auth.php' class='button button-secondary ms-2'>Get Started</a>";
                                    
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container px-2 hero">
            <div class="row">
                <div class="col-lg-7 mt-5">
                    <h1>Don't go looking for the <u> perfect fit.</u> Let it come Home to you.</h1>
                    <h5 class="mt-4">Great fit Effective Online Way</h5>
                        <form action="#" class="mt-5">
                            <div class="d-flex align-items-center bg-light rounded-3 mt-2 rounded-md-0 mt-md-0">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </span>
                                <input type="text" placeholder="Dress Type or keyword">
                            </div>  
                            <div class="d-flex align-items-center bg-light rounded-3 mt-2 mx-md-2 rounded-md-0 mt-md-0">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </span>
                                <input type="text" placeholder="City or Zip Code">
                            </div>
                            <button class="button button-secondary">Search</button>
                        </form>
                </div>
                <div class="col-lg-5">
                    <img class="d-none d-lg-block" src="assets/image/hero-Image.png" alt="">
                </div>
            </div>
        </div>
    </header>
<!-- ========Popular Section=========================================== -->
    <section class="popular">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Popular <span>services</span></h2>
                </div>
                <div class="col-lg-4">
                    <a href="category.php">
                        <div class="card-tile green">
                            <h2>Women <br> Collections</h2>
                            <img class="women-img" src="assets/image/women.png" alt="">
                            <p>35+ Tailors</p>
                            <div class="avatar">
                                <img src="assets/image/avatar/avatar-1.jpg" alt="">
                                <img src="assets/image/avatar/avatar-2.jpg" alt="">
                                <img src="assets/image/avatar/avatar-14.jpg" alt="">
                                <img src="assets/image/avatar/avatar-18.jpg" alt="">
                                <img src="assets/image/avatar/avatar-12.jpg" alt="">
                                <img src="assets/image/avatar/avatar-6.jpg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="category.php">
                        <div class="card-tile red">
                            <h2>Men <br> Collections</h2>
                            <img class="women-img" src="assets/image/men.png" alt="">
                            <p>48+ Tailors</p>
                            <div class="avatar">
                                <img src="assets/image/avatar/avatar-1.jpg" alt="">
                                <img src="assets/image/avatar/avatar-2.jpg" alt="">
                                <img src="assets/image/avatar/avatar-14.jpg" alt="">
                                <img src="assets/image/avatar/avatar-18.jpg" alt="">
                                <img src="assets/image/avatar/avatar-12.jpg" alt="">
                                <img src="assets/image/avatar/avatar-6.jpg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="category.php">
                        <div class="card-tile yellow">
                            <h2>Kids <br> Collections</h2>
                            <img class="women-img" src="assets/image/kids.png" alt="">
                            <p>18+ Tailors</p>
                            <div class="avatar">
                                <img src="assets/image/avatar/avatar-1.jpg" alt="">
                                <img src="assets/image/avatar/avatar-2.jpg" alt="">
                                <img src="assets/image/avatar/avatar-14.jpg" alt="">
                                <img src="assets/image/avatar/avatar-18.jpg" alt="">
                                <img src="assets/image/avatar/avatar-12.jpg" alt="">
                                <img src="assets/image/avatar/avatar-6.jpg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<!-- ========Features Section=========================================== -->
    <section>
        <div class="container">
            <div class="row flex-column-reverse flex-md-row justify-content-between">
                <div class="col-lg-6 mb-5">
                    <img class="img-fluid mt-4" src="assets/image/features.png" alt="">
                </div>
                <div class="col-lg-5">
                    <h2>We Provide Many <span>Features</span> You Can Use</h2>
                    <h3 class="mt-5">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 2.16669C7.0265 2.16669 2.16667 7.02652 2.16667 13C2.16667 18.9735 7.0265 23.8334 13 23.8334C18.9735 23.8334 23.8333 18.9735 23.8333 13C23.8333 7.02652 18.9735 2.16669 13 2.16669ZM10.8344 17.7808L7.57841 14.5318C7.15509 14.1094 7.15424 13.4238 7.5765 13.0004C7.99902 12.5766 8.6851 12.5759 9.10859 12.9986L10.8323 14.7193L15.8015 9.75002C16.2245 9.32702 16.9103 9.32702 17.3333 9.75002C17.7563 10.173 17.7563 10.8588 17.3333 11.2819L10.8344 17.7808Z" fill="#40FF53" /></svg>
                         Personal Stylist
                    </h3>
                    <p class="mt-3">
                        Our team of talented designers will ensure your outfit is the most flattering and in keeping with the fashion 
                    </p>
                    <h3 class="mt-5">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 2.16669C7.0265 2.16669 2.16667 7.02652 2.16667 13C2.16667 18.9735 7.0265 23.8334 13 23.8334C18.9735 23.8334 23.8333 18.9735 23.8333 13C23.8333 7.02652 18.9735 2.16669 13 2.16669ZM10.8344 17.7808L7.57841 14.5318C7.15509 14.1094 7.15424 13.4238 7.5765 13.0004C7.99902 12.5766 8.6851 12.5759 9.10859 12.9986L10.8323 14.7193L15.8015 9.75002C16.2245 9.32702 16.9103 9.32702 17.3333 9.75002C17.7563 10.173 17.7563 10.8588 17.3333 11.2819L10.8344 17.7808Z" fill="#40FF53" /></svg>
                        Online Comfort
                    </h3>
                    <p class="mt-3">
                        You can sit back in the comforts of your home, coordinate your order digitally via call or whatsapp and the magic will
                    </p>
                    <h3 class="mt-5">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 2.16669C7.0265 2.16669 2.16667 7.02652 2.16667 13C2.16667 18.9735 7.0265 23.8334 13 23.8334C18.9735 23.8334 23.8333 18.9735 23.8333 13C23.8333 7.02652 18.9735 2.16669 13 2.16669ZM10.8344 17.7808L7.57841 14.5318C7.15509 14.1094 7.15424 13.4238 7.5765 13.0004C7.99902 12.5766 8.6851 12.5759 9.10859 12.9986L10.8323 14.7193L15.8015 9.75002C16.2245 9.32702 16.9103 9.32702 17.3333 9.75002C17.7563 10.173 17.7563 10.8588 17.3333 11.2819L10.8344 17.7808Z" fill="#40FF53" /></svg>
                        Quick Stitching
                    </h3>
                    <p class="mt-3">
                        Style cannot wait and we make sure that your most-awaited order is processed, stitched and delivered to you at the 
                    </p>
                </div>
            </div>
        </div>
    </section>
<!-- ========Features Section=========================================== -->
    <section>
        <div class="container">
            <h2 class="text-center">How is it's <span>work</span></h2>
            <div class="row mt-5">
                <div class="col-lg-4 text-center">
                    <img src="assets/image/icons/icon-style-work.svg" alt="dsd">
                    <h5> choose a style</h5>
                    <p class="mt-4">Choose your style from our style catalogue OR simply upload your style image.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="assets/image/icons/icon-measured-work.svg" alt="dsd">
                    <h5> Get Measured</h5>
                    <p class="mt-4">Schedule Technician's visit OR send us your Best Fit garment (Free pick up).</p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="assets/image/icons/icon-delivery-work.svg" alt="dsd">
                    <h5> Delivery within 10 days</h5>
                    <p class="mt-4">Your garment get stitched by professional tailors and delivered within 10 days.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container ">
            <div class="row ">
                <div class="col-lg-4">
                    <h2>Tailor<span>Opedia</span></h2>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <a href="#"><img src="assets/image/icons/fb.svg" alt=""></a>
                    <a href="#"><img src="assets/image/icons/twit.svg" alt=""></a>
                    <a href="#"><img src="assets/image/icons/insta.svg" alt=""></a>
                    <br><i>©2020TailoPedia</i>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2">
                    <h5>Product</h5>
                    <ul>
                        <li><a href="#">Download</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">Server</a></li>
                        <li><a href="#">Countries</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h5>Engage</h5>
                    <ul>
                        <li><a href="">LaslesVPN ?</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Tutorials</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h5>Earn Money</h5>
                    <ul>
                        <li><a href="">Affiliate</a></li>
                        <li><a href="">Become Partner</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap-js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>