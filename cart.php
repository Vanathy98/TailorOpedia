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
    <title>Cart Page</title>
    <!-- Bootstrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="src/css/main.css">
</head>

<body class="cart">
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
                            <p class="ms-md-3 text-white"><?php  echo  $_SESSION['name'] ?></p>
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

    <div class="container p-0 mt-5">
        <h3>Product Order</h3>
        <?php 
                if(isset($_SESSION['ordered'])){
                    echo $_SESSION['ordered'];
                    unset($_SESSION['ordered']);
                }
               ?>
        <div class="row">
            <div class="col-lg-9">
                <!-- Cart-List -->
                <div id="cart" class="bg-white rounded-20 my-4">
                    <?php
                    $id = $_GET['dress_id'];
                    $sql = "SELECT completed_product.id AS dress_id,
                    completed_product.name AS dress_name,
                    completed_product.cost AS dress_cost,
                    completed_product.name AS dress_name,
                    completed_product.uploaded_on AS uploaded_on,
                    completed_product.img_name AS img_name,
                    completed_product.tai_id AS tai_id,
                    user.fullname AS fullname,
                    user.email AS email,
                    user.address AS address2,
                    user.postelcode AS postalcode,
                    user.id AS user_id
                    FROM completed_product
                    JOIN user
                    ON completed_product.tai_id = user.id WHERE completed_product.id = $id";
                    $res = mysqli_query($conn,$sql);
                    $row=mysqli_fetch_array($res);
                    $name = $row['dress_name'];
                    $address = $row['address2'];
                    $postalcode = $row['postalcode'];
                    $cost=$row['dress_cost'];
                    $uploaded_on = $row['uploaded_on'];
                    $img=$row['img_name'];
                    $tailor=$row['fullname'];
                    $tailor_id=$row['tai_id'];
                    $email=$row['email'];
                    ?>
                    <hr class="my-4 mx-4">
                    <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-lg-2">
                                <img src="assets/image/dress/<?php echo $img;?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-lg-5">
                                <h3 class="mb-2"><?php echo $name;?></h3>
                                <small>Stitching Name : <?php echo $name;?></small>
                                <a href="#" class="d-block mt-4 text-primary">Add Measurement</a>
                            </div>
                            <div class="col-lg-1 text-center">
                                <button class="btn btn-link py-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp();getQty();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                </button>

                                <input id="form1" min="1" name="quantity" value="1" type="number"
                                    class="form-control form-control-sm text-center" />

                                <button class="btn btn-link py-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown();getQty();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-dash-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="col-lg-2 offset-lg-1">
                                <h4 class="mb-0">Rs.<?php echo $cost;?></h4>
                            </div>
                            <div class="col-lg-1 text-end">
                                <a href="#!" class="text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Customer name email phone number -->
                <h3 class="mt-5">Profile Customer</h3>
                <div id="bio" class="bg-white rounded-20 my-4 p-4">
                    <form action="order.php" method="POST">
                        <input type="hidden" name="dress_id" value="<?php echo $id; ?>">
                        <input type="hidden" name="customer_id" value="<?php echo  $_SESSION['id']; ?>">
                        <input type="hidden" name="tailor_id" value="<?php echo $tailor_id;?>">
                        <input type="hidden" name="amount" id="amount">
                        <input type="hidden" id="qty" name="qty">
                        <script>
                            function getQty() {
                                document.getElementById("qty").value = document.getElementById("form1").value;
                                document.getElementById("amount").value = document.getElementById("form1").value*<?php echo $cost;?>;
                            }
                                </script>
                        <div class="row gy-5 gx-5">
                            <div class="col-lg-6">
                                <label for="firstName" class="form-label" >First Name</label>
                                <input type="text" placeholder="First Name" value="<?php echo $tailor;?>">
                            </div>
                            <div class="col-lg-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" placeholder="Last Name">
                            </div>
                            <div class="col-lg-6">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="text" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-6">
                                <label for="eamil" class="form-label">Email</label>
                                <input type="text" placeholder="Email" value="<?php echo $email;?>">
                            </div>
                        </div>
                   
                </div>
                <!-- Delivery Address -->
                <h3 class="mt-5">Delivery Address</h3>
                <div id="delivery" class="bg-white rounded-20 my-4 p-4">
                 
                        <div class="row gy-5 gx-5">
                            <div class="col-lg-4">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" placeholder="Country">
                            </div>
                            <div class="col-lg-4">
                                <label for="state" class="form-label">State</label>
                                <input type="text" placeholder="State">
                            </div>
                            <div class="col-lg-4">
                                <label for="city" class="form-label">City</label>
                                <input type="text" placeholder="City">
                            </div>
                            <div class="col-lg-8">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" placeholder="Address" name="address" value="<?php echo $address;?>">
                            </div>
                            <div class="col-lg-4">
                                <label for="zipCode" class="form-label">Zip Code</label>
                                <input type="text" placeholder="Zip Code" value="<?php echo $postalcode;?>">
                            </div>
                        </div>
                   
                </div>
                <!-- Payment Method -->
                <h3 class="mt-5">Payment Method</h3>
                <div id="payment" class="bg-white rounded-20 my-4 p-4">
                    
                        <div class="row gy-5 gx-5">
                            <div class="col-lg-6">
                                <label for="nameonCard" class="form-label">Name on Card</label>
                                <input type="text" placeholder="Name on Card">
                            </div>
                            <div class="col-lg-6">
                                <label for="state" class="form-label">Card Number</label>
                                <input type="text" placeholder="0000 - 0000 - 0000 - 0000" name="card" >
                            </div>
                            <div class="col-lg-4">
                                <label for="month" class="form-label">Month</label>
                                <input type="text" placeholder="Month">
                            </div>
                            <div class="col-lg-4">
                                <label for="year" class="form-label">Year</label>
                                <input type="text" placeholder="Year">
                            </div>
                            <div class="col-lg-4">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="text" placeholder="CVV">
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Checkout" class="button button-primary py-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="bg-white rounded-10 p-2 my-4 cart-nav position-relative position-sticky top-0">
                    <ul>
                        <li><a href="#cart" class="active"> Your Cart</li></a>
                        <li><a href="#bio"> Profile Customer</li></a>
                        <li><a href="#delivery"> Delivary</li></a>
                        <li><a href="#payment"> Payment Details</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="src/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>