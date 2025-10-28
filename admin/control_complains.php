<?php 
session_start();
include '../php/db_con.php';
if(!isset($_SESSION["admin_name"]))
{ session_destroy();
  header("Location: index.php");
  $admin_id="";
  $admin_name="";
  $admin_type="";
}
else {
    $admin_id=$_SESSION['admin_id'];
    $admin_name=$_SESSION['admin_name'];
    $admin_type=$_SESSION['admin_type'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Control Complains | Admin Panel E7gzly</title>
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
                        <a href="control_complains.php" class="nav-item nav-link active">Control Complains</a>
                        <?php } else { ?>
                        <!-- partner -->
                        <a href="control_services.php" class="nav-item nav-link">Control Services</a>
                        <a href="control_orders.php" class="nav-item nav-link">Control Orders</a>
                        <a href="control_info.php" class="nav-item nav-link">Control My Info</a>
                        <?php } ?>
                    </div>
                    <a href="../php/admin_logout.php" class="btn btn-primary py-2 px-4">Logout</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Control Complains</h1>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Admin Control Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                   
                    <div class="col-md-12">
                        
<div class="container table-responsive"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>

  <?php 
$sql_complains = "select * from complain";
$result_complains = mysqli_query($conn,$sql_complains);
while ($row_complains= mysqli_fetch_array($result_complains,MYSQLI_ASSOC)) { 
$complain_id=$row_complains['complain_id'];
$complain_title=$row_complains['complain_title'];
$complain_message=$row_complains['complain_message'];
$complain_date=$row_complains['complain_date'];
$user_name=$row_complains['user_name'];
$user_email=$row_complains['user_email'];
$user_phone=$row_complains['user_phone'];
?>

    <tr>
      <th scope="row"><?php echo $complain_date;?></th>
      <td><?php echo $user_name;?></td>
      <td><?php echo $user_email;?></td>
      <td><?php echo $user_phone;?></td>
      <td><?php echo $complain_title;?></td>
      <td><?php echo $complain_message;?></td>
    </tr>

    <?php } ?>

  </tbody>
</table>
</div>

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