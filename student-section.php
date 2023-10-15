<?php
include('session.php');
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="goglowlimited">
    <meta name="keywords" content="au theme template">
    <meta name="description" content="Online Training Hub:Learn Web Development, Graphics Design, App Development, Programming, Software Development, UI/UX Design, IELTS & TOEFL Training, Jamb Registrations, CBT Trainings, Office Supplies, Projectors, Phones &amp; Tablets, Laptops, Phone Accessories, Furniture, Printers, Hire Projector, Hire Public Adress System, Clothing Accessories, Fashion, Tech In Nigeria - Goglow" />
    <meta name="keywords" content="Dashboard - Online Training Hub:Learn Web Development, Graphics Design, App Development, Programming, Software Development, UI/UX Design, IELTS & TOEFL Training, Jamb Registrations, CBT Trainings, Office Supplies, Projectors, Phones &amp; Tablets, Laptops, Phone Accessories, Furniture, Printers, Hire Projector, Hire Public Adress System, Clothing Accessories, Fashion, Tech In Nigeria - Goglow" />

    <!-- Title Page-->
    <title>Student Section - Goglow Dashboard</title>

    <!-- Fontfaces CSS-->
    <link rel="icon" type="image/png" href="../images/icons/g1.png"/>
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="pop-up/swc.css"/>

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="">

    <?php
        include('pop-up/index5.html');
    ?>

    <?php
include('header-student.php');
?>
    
        

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           


                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Welcome!</h3>
                                
                            </div>


                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Welcome to your GOGLOW HUB Dashboard! </strong>
                                        <small><!--2 MONTHS
                                            <code>&lt;a&gt;</code>,
                                            <code>&lt;button&gt;</code> or
                                            <code>&lt;input&gt;</code>-->
                                        </small>
                                    </div>
                                    <div class="card-body">
                                          <h2>Welcome! <?php echo $firstname;?></h2>
                                          <!--<p>Thank you for your order. Please <a href='reciept.pdf' target="_blank" style="color: #99bd44;">download your invoice</a>. </p>-->
                                          <p><i style="color: #33cc33;">Hello <?php echo $firstname;?>! We have really missed you! Welcome back</i> - This is your Official GOGLOW HUB Student Account. Kindly Keep all your personal and security details private.</p>
                                    </div>
                                    
                                </div>
                            </div>




                    </div>




                        <div class="row">
                            <div class="col-md-12">
                                <?php
include('footer-student.php');
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
       

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="pop-up/swc.js"></script>

</body>

</html>
<!-- end document-->
