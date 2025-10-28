<?php 
include 'php/db_con.php';
if(!isset($_GET["user_service_id"]))
{header("Location: index.php");}
else {
    $user_service_id=$_GET["user_service_id"];
    $user_service_date=$_GET["user_service_date"];
    $user_service_people=$_GET["user_service_people"];
    $user_service_details=$_GET["user_service_details"];

    $get_partner=$_GET["partner_id"];
$sql_get_partner = "select * from partner where partner_id=$get_partner";
$result_get_partner = mysqli_query($conn,$sql_get_partner);
$row_get_partner= mysqli_fetch_array($result_get_partner,MYSQLI_ASSOC);
$partner_id=$row_get_partner['partner_id'];
$partner_name=$row_get_partner['partner_name'];
$partner_email=$row_get_partner['partner_email'];
$partner_category=$row_get_partner['partner_category'];
$partner_password=$row_get_partner['partner_password'];
$partner_address=$row_get_partner['partner_address'];
$partner_phone=$row_get_partner['partner_phone'];
$partner_img1=$row_get_partner['partner_img1'];
$partner_img2=$row_get_partner['partner_img2'];
$partner_menu=$row_get_partner['partner_menu'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Partner Details (<?php echo $partner_name;?>) | E7gzly</title>
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
                        <a href="partner.php" class="nav-item nav-link active">Partners</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
<?php 
session_start();
if(!isset($_SESSION["user_name"]))
{ 
   session_unset(); /* remove all session variables */
   session_destroy(); /* Destroy started session */
   $user_id =0;
   $user_phone ="";
   $user_password ="";
   $user_name ="";
   $user_email =""; ?>
   <a href="login.php" class="btn btn-primary py-2 px-4">Login</a>
<?php }
else {
   $user_id = $_SESSION["user_id"];
   $user_phone = $_SESSION["user_phone"];
   $user_name = $_SESSION["user_name"];
   $user_password = $_SESSION["user_password"];
   $user_email = $_SESSION["user_email"];
?>
                    <a href="php/logout.php" class="btn btn-primary py-2 px-4">Logout</a>

<?php } ?>
                </div>
            </nav>

           <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Order has been booked</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item">Book ID : #<?php echo $user_service_id;?></li>
                        <li class="breadcrumb-item">Book Date : <?php echo $user_service_date;?></li>
                        <li class="breadcrumb-item">Book Place : <?php echo $partner_name;?></li>
                        <li class="breadcrumb-item">Book Number of people : <?php echo $user_service_people;?></li>
                        <li class="breadcrumb-item">Book Details : <?php echo $user_service_details;?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


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