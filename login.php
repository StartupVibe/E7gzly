<?php 
session_start();
include 'php/db_con.php';
if(isset($_SESSION["user_name"]))
{header("Location: index.php");}
else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | E7gzly</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.png" rel="icon">

    <!-- CSS Stylesheet -->
    <link href="css/fontawesome6.4.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font_icon.css" rel="stylesheet">
</head>

<body>

    <div class="container-xxl bg-white p-0">

        <!-- Navbar start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>E7gzly</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="partner.php" class="nav-item nav-link">Partners</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>

   <a href="login.php" class="btn btn-primary py-2 px-4">Login</a>

                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Login</h1>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Login Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form method="POST" action="php/login.php">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input name="user_name" type="text" class="form-control" id="user_name" placeholder="User Name *" required>
                                            <label for="name">User Name *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input name="user_password" type="password" class="form-control" id="password" placeholder="User Password *" required>
                                            <label for="password">User Password *</label>
                                        </div>
                                    </div>
                                    </div><br>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><br>

                      <div class="col-12">
                            <div class="col-md-12">
                                <a href="signup.php"><h5 class="section-title ff-secondary fw-normal text-start text-primary">You don't have an Account? Creat New Account</h5></a>
                            </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Login End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-1 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                            &copy; 2023 E7gzly, All Right Reserved.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

    </div>

    <!-- JavaScript Libraries -->
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/d.js"></script>
</body>

</html>

<?php } ?>