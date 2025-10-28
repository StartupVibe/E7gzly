<?php 
include 'php/db_con.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact | E7gzly</title>
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
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Phone</h5>
                                <p><i class="fa fa-phone text-primary me-2"></i>+2 01150621354</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Email</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>info@e7gzly.com</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Complain</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>complain@e7gzly.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110589.07055385866!2d31.185697243359378!3d29.982060800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458392367329c5d%3A0x7764f5ad37302d2b!2sModern%20Academy!5e0!3m2!1sen!2seg!4v1684694875886!5m2!1sen!2seg"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>    
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form method="POST" action="php/add_complain.php">
                            <input name="complain_date" type="hidden" value="<?php echo date('Y-m-d h:i:sa');?>">

                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input value="<?php echo $user_name;?>" name="user_name" type="text" class="form-control" id="name" placeholder="Your Name *" required>
                                            <label for="name">Your Name *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input value="<?php echo $user_phone;?>" name="user_phone" type="text" class="form-control" id="phone" placeholder="Your Phone *" required>
                                            <label for="phone">Your Phone *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input value="<?php echo $user_email;?>" name="user_email" type="email" class="form-control" id="email" placeholder="Your Email *" required>
                                            <label for="email">Your Email *</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input name="complain_title" type="text" class="form-control" id="subject" placeholder="Subject *" required>
                                            <label for="subject">Subject *</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea name="complain_message" class="form-control" placeholder="Leave a message here *" id="message" style="height: 150px" required></textarea>
                                            <label for="message">Leave a message here *</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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