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

    <div class="container p-0 my-5">
        <h2>Men | Casual Shirts</h2>
        <div class="row">
            <div class="col-lg-3">
                <p class="py-3">256k Tailors</p>
            </div>
            <div class="col-lg-3">
                <div class="d-flex">
                    <ul class="dropdowns">
                        <li id="title">
                            <p>Location <span class="text-dark ms-4">Jaffan Point pedro</span></p>
                            <ul>
                                <li>
                                    <div>Navigation</div>
                                    <ul>
                                        <li>Breadcrumb</li>
                                        <li>Dropdown</li>
                                        <li>Menu</li>
                                        <li>Nested dropdown</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex">
                    <ul class="dropdowns">
                        <li id="title">
                            <p>Price<span class="text-dark ms-4">Rs 10,000 - Rs 30,000</span></p>
                            <ul>
                                <li id="price-slider">
                                    <input type="range" min="0" max="100" step="1">
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex">
                    <ul class="dropdowns">
                        <li id="title">
                            <p>Sort by<span class="text-dark ms-4">Top sallers</span></p>
                            <ul>
                                <li>Breadcrumb</li>
                                <li>Dropdown</li>
                                <li>Menu</li>
                                <li>Nested dropdown</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-3 sidebar">
                <details open>
                    <summary>Men Clothing <span><img src="assets/image/icons/arrow-down.svg" alt=""></span></summary>
                    <ul>
                        <li><a href="#">Casual Shirts</a></li>
                        <li><a href="#">Formal Shirt</a></li>
                        <li><a href="#">Pyjama Pants</a></li>
                        <li><a href="#">Formal Trousers</a></li>
                        <li><a href="#">Jeans & Joggers</a></li>
                        <li><a href="#">Short’s</a></li>
                        <li><a href="#">Casual Pants</a></li>
                        <li><a href="#">Kurtha</a></li>
                    </ul>
                </details>
                <details>
                    <summary>Women Clothing <span><img src="assets/image/icons/arrow-down.svg" alt=""></span></summary>
                    <ul>
                        <li><a href="#">Blouse</a></li>
                        <li><a href="#">Gown</a></li>
                        <li><a href="#">Kurti</a></li>
                        <li><a href="#">Suits</a></li>
                        <li><a href="#">Bootom</a></li>
                    </ul>
                </details>
                <details>
                    <summary>Kid's Clothing <span><img src="assets/image/icons/arrow-down.svg" alt=""></span></summary>
                    <ul>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Trousers</a></li>
                        <li><a href="#">Skirts</a></li>
                        <li><a href="#">Frock</a></li>
                    </ul>
                </details>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    
                    
                    <?php
                        $sql = "SELECT completed_product.id AS dress_id,
                        completed_product.name AS dress_name,
                        completed_product.cost AS dress_cost,
                        completed_product.name AS dress_name,
                        completed_product.uploaded_on AS uploaded_on,
                        completed_product.img_name AS img_name,
                        user.fullname AS fullname,
                        user.id AS user_id
                        FROM completed_product
                        LEFT JOIN user
                        ON completed_product.tai_id = user.id";
                        $res = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($res);
                        if($count>0)
                        {
                            while($row=mysqli_fetch_array($res))
                            {
                                $id = $row['dress_id'];
                                $name = $row['dress_name'];
                                $cost=$row['dress_cost'];
                                $uploaded_on = $row['uploaded_on'];
                                $img=$row['img_name'];
                                $tailor=$row['fullname'];
                                
                    ?>
                    <div class="col-lg-4">
                        <a href="details.php?id=<?php echo $row['dress_id'];?>">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/dress/<?php echo $img;?>" class="img-fluid" alt="">
                                </div>
                                <!-- Content -->
                                <div class="body">
                                    <!-- Title and review -->
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h5><?php echo $name; ?></h5>
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
                                        <div class="details d-flex align-items-center">
                                            <img src="assets/image/avatar/user.png" class="avatar img-fluid" alt="">
                                            <div class="ms-2">
                                                <p>by <span><?php echo $tailor; ?></span></p>
                                                <small>delivered at <?php echo $uploaded_on; ?> </small>
                                            </div>
                                        </div>
                                        <h5>Rs <?php echo $cost; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>    
                                <?php 
                                 }
                                }
                                ?>

                        <div class="col-lg-4">
                        <a href="upload_dress.php">
                            <div class="card">
                                <!-- Image -->
                                <div class="header">
                                    <img src="assets/image/insert-image-icon-14.jpg" class="img-fluid" alt="">
                                </div>
                                
                            </div>
                        </a>
                    </div>       
                        
                       
            </div>
        </div>
    </div>

    <script src="src/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>