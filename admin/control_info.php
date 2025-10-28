<?php 
session_start();
include '../php/db_con.php';
if(!isset($_SESSION["partner_name"]))
{ session_destroy();
  header("Location: index.php");
  $admin_type="";
  $partner_id="";
  $partner_name="";
  $partner_category="";
  $partner_email="";
  $partner_address="";
  $partner_phone="";
}
else {
    $admin_type=$_SESSION['admin_type'];
    $partner_id=$_SESSION['partner_id'];
    $partner_name=$_SESSION['partner_name'];
    $partner_category=$_SESSION['partner_category'];
    $partner_email=$_SESSION['partner_email'];
    $partner_address=$_SESSION['partner_address'];
    $partner_phone=$_SESSION['partner_phone'];
    $partner_password=$_SESSION['partner_password'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Partner (<?php echo $partner_name;?>) | Admin Panel E7gzly</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="../img/favicon.png" rel="icon">

    <!-- CSS Stylesheet -->
    <link href="../css/fontawesome6.4.0/css/all.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/font_icon.css" rel="stylesheet">
</head>

<body>

    <div class="container-xxl bg-white p-0">

        <!-- Navbar start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="../" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>E7gzly</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <?php if ($admin_type == "Admin") { ?>
                        <!-- admin -->
                        <a href="control_partners.php" class="nav-item nav-link">Control Partners</a>
                        <a href="control_complains.php" class="nav-item nav-link">Control Complains</a>
                        <?php } else { ?>
                        <!-- partner -->
                        <a href="control_services.php" class="nav-item nav-link">Control Services</a>
                        <a href="control_orders.php" class="nav-item nav-link">Control Orders</a>
                        <a href="control_info.php" class="nav-item nav-link active">Control My Info</a>
                        <?php } ?>
                    </div>
                    <a href="../php/admin_logout.php" class="btn btn-primary py-2 px-4">Logout</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Edit (<?php echo $partner_name;?>)</h1>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Admin Control Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="../php/edit_partner.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="partner_id" value="<?php echo $partner_id;?>">

                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="partner_name" value="<?php echo $partner_name;?>" class="form-control" id="name" placeholder="Partner Name *" required>
                                            <label for="name">Partner Name *</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" name="partner_category" value="<?php echo $partner_category;?>" class="form-control" id="category" placeholder="Category *" required>
                                            <label for="category">Category *</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="file" name="partner_img1" value="" class="form-control" id="img1" placeholder="Image1 for Partner *" required>
                                            <label for="image1">Image 1 for Partner *</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="file" name="partner_img2" value="" class="form-control" id="img2" placeholder="Image2 for Partner *" required>
                                            <label for="image2">Image 2 for Partner *</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="email" name="partner_email" value="<?php echo $partner_email;?>" class="form-control" id="email" placeholder="Email *" required>
                                            <label for="email">Email *</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" name="partner_password" value="<?php echo $partner_password;?>" class="form-control" id="password" placeholder="Password *" required>
                                            <label for="password">Password *</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" name="partner_phone" value="<?php echo $partner_phone;?>" class="form-control" id="phone" placeholder="Phone *" required>
                                            <label for="phone">Phone *</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" name="partner_address" value="<?php echo $partner_address;?>" class="form-control" id="address" placeholder="Address *" required>
                                            <label for="address">Address *</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="file" name="partner_menu" value="" class="form-control" id="menu" placeholder="Menu of Partner *" required>
                                            <label for="menu">Menu of Partner *</label>
                                        </div>
                                    </div>
                                    </div><br>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Edit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Admin Control End -->


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
    <script src="../https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>
<?php } ?>