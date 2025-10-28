<?php 
include 'php/db_con.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Partners | E7gzly</title>
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

            <div class="container-xxl py-5 bg-dark hero-header mb-5 filter">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Partners</h1>
                    <h4>
<?php

$sql_services = "select * from service";
$result_services = mysqli_query($conn,$sql_services);
while ($row_services= mysqli_fetch_array($result_services,MYSQLI_ASSOC)) { 
$service_ids=$row_services['service_id'];
$service_names=$row_services['service_name'];?>
                                <a href="partner.php?service_id=<?php echo $service_ids;?>" class="dropdown-item"><?php echo $service_names;?></a>
<?php } ?>
                    </h4>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

        

        
        <!-- Partners Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                  

                <!-- partner item start -->
<?php

if(isset($_GET["service_id"])){ 
    $service_id=$_GET['service_id'];
    $sql_get_partners = "select * from partner_service where service_id=$service_id";
    $result_get_partners = mysqli_query($conn,$sql_get_partners);
    while ($row_get_partners= mysqli_fetch_array($result_get_partners,MYSQLI_ASSOC)) {
    $get_partner=$row_get_partners['partner_id'];
    
$sql_partners = "select * from partner where partner_id=$get_partner";
$result_partners = mysqli_query($conn,$sql_partners);
$row_partners= mysqli_fetch_array($result_partners,MYSQLI_ASSOC);
$partner_id=$row_partners['partner_id'];
$partner_name=$row_partners['partner_name'];
$partner_category=$row_partners['partner_category'];
$partner_img1=$row_partners['partner_img1'];?>
                    <a class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-delay="0.1s" href="partner_details.php?partner_id=<?php echo $partner_id;?>">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <img class="img-fluid rounded w-100 wow zoomIn fa fa-3x fa-utensils text-primary mb-4" data-wow-delay="0.1s" src="img/uploads/<?php echo $partner_img1;?>">
                                <h5><?php echo $partner_name;?></h5>
                                <p><?php echo $partner_category;?></p>
                            </div>
                        </div>
                    </a>
<?php 

}  } else {

$sql_partners = "select * from partner";
$result_partners = mysqli_query($conn,$sql_partners);
while ($row_partners= mysqli_fetch_array($result_partners,MYSQLI_ASSOC)) {
$partner_id=$row_partners['partner_id'];
$partner_name=$row_partners['partner_name'];
$partner_category=$row_partners['partner_category'];
$partner_img1=$row_partners['partner_img1'];?>
                    <a class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-delay="0.1s" href="partner_details.php?partner_id=<?php echo $partner_id;?>">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <img class="img-fluid rounded w-100 wow zoomIn fa fa-3x fa-utensils text-primary mb-4" data-wow-delay="0.1s" src="img/uploads/<?php echo $partner_img1;?>">
                                <h5><?php echo $partner_name;?></h5>
                                <p><?php echo $partner_category;?></p>
                            </div>
                        </div>
                    </a>
<?php } } ?>

                <!-- partner item end -->


                </div>
            </div>
        </div>
        <!-- Partners End -->
        

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