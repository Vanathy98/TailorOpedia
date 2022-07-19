<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement Page</title>
    <!-- Bootstrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="src/css/main.css">
</head>

<body class="measure">
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
                            <p class="ms-md-3 text-white">Michel Erving</p>
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
        <div class="my-5">
            <h3>Make Your Own Style Statement</h3>
            <p class="my-3">Make your outfit unique by choosing neck patterns, sleeves and embellishments of your
                liking.</p>
        </div>
        <div class="row my-5">
            <div class="col-lg-3">
                <div class="measure-nav bg-light rounded-10">
                    <a href="#">
                        <div class="items demo d-flex align-items-center p-2" onclick="currentSlide(1)">
                            <div class="number">1</div>
                            <div class="px-3">
                                <h4>Style</h4>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="items demo d-flex align-items-center p-2" onclick="currentSlide(2)">
                            <div class="number">2</div>
                            <div class="px-3">
                                <h4>Front Neck Design</h4>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="items demo d-flex align-items-center p-2" onclick="currentSlide(3)">
                            <div class=" number">3</div>
                            <div class="px-3">
                                <h4 class="m-0">Back Neck Design</h4>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="items demo d-flex align-items-center p-2" onclick="currentSlide(4)">
                            <div class="number">4</div>
                            <div class="px-3">
                                <h4 class="m-0">Sleeves</h4>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="items demo d-flex align-items-center p-2" onclick="currentSlide(5)">
                            <div class="number">5</div>
                            <div class="px-3">
                                <h4 class="m-0">Opening</h4>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="items demo d-flex align-items-center p-2" onclick="currentSlide(6)">
                            <div class="number">6</div>
                            <div class="px-3">
                                <h4 class="m-0">Bottoms</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <form action="#">
                    <!-- Style -->
                    <div class="row screen">
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option1" value="suits" name="style" />
                                <label for="option1">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/women.svg" alt="">
                                    </div>
                                    <p>A line suits</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option2" value="suits2" name="style" />
                                <label for="option2">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame32.png" alt="">
                                    </div>
                                    <p>Anarkali suit</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option3" value="suits3" name="style" />
                                <label for="option3">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame33.png" alt="">
                                    </div>
                                    <p>Angrakha suits</p>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="button button-primary px-5" onclick="plusSlides(1)">Next</a>
                        </div>
                    </div>
                    <!-- Front Neck -->
                    <div class="row screen">
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option4" value="fnd1" name="style" />
                                <label for="option4">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame3.png" alt="">
                                    </div>
                                    <p>Angrakha suits</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option5" value="fnd2" name="fnd" />
                                <label for="option5">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame4.png" alt="">
                                    </div>
                                    <p>Assymetrical with cords</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option6" value="fnd3" name="fnd" />
                                <label for="option6">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame5.png" alt="">
                                    </div>
                                    <p>Axe</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option7" value="fnd4" name="fnd" />
                                <label for="option7">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame6.png" alt="">
                                    </div>
                                    <p>Axe with U</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option8" value="fnd5" name="fnd" />
                                <label for="option8">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame7.png" alt="">
                                    </div>
                                    <p>Boat neck</p>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="button" onclick="plusSlides(-1)">Previous</a>
                            <a class="button button-primary px-5" onclick="plusSlides(1)">Next</a>
                        </div>
                    </div>
                    <!-- Back Neck -->
                    <div class="row screen">
                    <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option9" value="bacNe1" name="bacNe" />
                                <label for="option9">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame9.png" alt="">
                                    </div>
                                    <p>Arrow</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option10" value="bacNe2" name="bacNe" />
                                <label for="option10">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame10.png" alt="">
                                    </div>
                                    <p>Asymmetrical</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option11" value="bacNe3" name="bacNe" />
                                <label for="option11">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame11.png" alt="">
                                    </div>
                                    <p>Asymmetrical</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option12" value="bacNe4" name="bacNe" />
                                <label for="option12">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame12.png" alt="">
                                    </div>
                                    <p>Asymmetrical</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option13" value="bacNe4" name="bacNe" />
                                <label for="option13">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame13.png" alt="">
                                    </div>
                                    <p>Asymmetrical</p>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="button" onclick="plusSlides(-1)">Previous</a>
                            <a class="button button-primary px-5" onclick="plusSlides(1)">Next</a>
                        </div>
                    </div>
                    <!-- Sleeves End -->
                    <div class="row screen">
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option14" value="sleeve1" name="sleeve" />
                                <label for="option14">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame15.png" alt="">
                                    </div>
                                    <p>batwing</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option15" value="sleeve2" name="sleeve" />
                                <label for="option15">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame16.png" alt="">
                                    </div>
                                    <p>cap</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option16" value="sleeve3" name="sleeve" />
                                <label for="option16">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame19.png" alt="">
                                    </div>
                                    <p>bell</p>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="button" onclick="plusSlides(-1)">Previous</a>
                            <a class="button button-primary px-5" onclick="plusSlides(1)">Next</a>
                        </div>
                    </div>
                    <!-- Opening -->
                    <div class="row screen">
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option17" value="Opening1" name="Opening" />
                                <label for="option17">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame21.png" alt="">
                                    </div>
                                    <p>front opening</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option18" value="Opening2" name="Opening" />
                                <label for="option18">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame22.png" alt="">
                                    </div>
                                    <p>Side opening</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option19" value="Opening3" name="Opening" />
                                <label for="option19">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame23.png" alt="">
                                    </div>
                                    <p>Back opening</p>
                                </label>
                            </div>
                        </div>
                        <<div class="d-flex justify-content-end">
                            <a class="button" onclick="plusSlides(-1)">Previous</a>
                            <a class="button button-primary px-5" onclick="plusSlides(1)">Next</a>
                        </div>
                    </div>
                     <!-- bottom -->
                     <div class="row screen">
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option20" value="bottom1" name="bottom" />
                                <label for="option20">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame29.png" alt="">
                                    </div>
                                    <p>Dhoti1</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option21" value="bottom2" name="bottom" />
                                <label for="option21">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame30.png" alt="">
                                    </div>
                                    <p>Dhoti2</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputGroup bg-light">
                                <input type="radio" id="option22" value="bottom3" name="bottom" />
                                <label for="option22">
                                    <div class="measure-img">
                                        <img src="assets/image/measure-img/Frame31.png" alt="">
                                    </div>
                                    <p>Dhoti3</p>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" >
                            <a class="button" onclick="plusSlides(-1)" >Previous</a>
                            <a href="size.php" class="button" >Give measurement</a>
                            <a href="cartart.php" class="button button-primary px-5">Add to cart</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="src/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>