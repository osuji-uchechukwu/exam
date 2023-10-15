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
    <title>View Active Courses - Goglow Dashboard</title>

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
    <link rel="stylesheet" type="text/css" href="../home_style.css"/>

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="">
    <?php
include('header-student.php');
?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">View All <?php
echo $lastname;
?> Courses</h3>








                                <!--<div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>-->
                         






                              <div class="col-md-12">
                                <aside class="profile-nav alt">
                                    <section class="card">
                                        <div class="card-header user-header alt bg-dark">
                                            <div class="media">
                                                <a href="#">
                                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="../<?php echo $afile2; ?>">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="text-light display-6"><?php echo $firstname; ?></h4>
                                                    <p><?php echo $phonenumber;?></p>
                                                </div>
                                            </div>
                                        </div>


                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <i class="fa fa-envelope-o"></i> Active Packages
                                                    <span class="badge badge-primary pull-right" style="margin-left: 10px;">
                                                      <?php $count = "SELECT count(*) FROM cartorders WHERE Activity='Active' AND AccountID='$accountid'";
                                                        $database_count = mysql_query($count);{
                                                        $DuetiesDesc = array();
                                                        $database_count=mysql_fetch_assoc($database_count);



                                                          
                                                        
                                                         
                                                              echo $database_count['count(*)'];
                                       
                                                           } ?></span>
                                                </a>

                                            <div class="rs-select2--light rs-select2--md" style="width: 100%;">
                                            <select class="js-select2" name="property" style="width: 100%;">
                                                <option selected="selected">Active Packages</option>
                                                <?php
                                                $result = mysql_query("SELECT * FROM cartorders WHERE Activity='Active' AND AccountID='$accountid'");
                                            while($row = mysql_fetch_array($result))
                                            {   
                                              $prodid = explode( ', ', $row["ProductID"] );

                                              $prodna = explode( ', ', $row["Productname"] );

                                              $subtot = explode( ', ', $row["Subtotal"] );

                                              $totpr = $row["Totalprice"];

                                              $bal = $row["Balance"];

                                              

                                              foreach ($prodna as $value => $prodnae) {
                                                echo '<option value="">'.$prodnae.' Sub-Total Price: <span class="naira"></span>'.number_format($subtot[$value]).' Total Price: <span class="naira"></span>'.number_format($totpr).' Balance: <span class="naira"></span>'.number_format($bal).'</option>';
                                              }
                                            }
                ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                            </div>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <i class="fa fa-tasks"></i> Suspended Packages
                                                    <span class="badge badge-danger pull-right"  style="margin-left: 10px;">
                                                      <?php $count = "SELECT count(*) FROM cartorders WHERE Activity='Suspended' AND AccountID='$accountid'";
                                                        $database_count = mysql_query($count);{
                                                        $DuetiesDesc = array();
                                                        $database_count=mysql_fetch_assoc($database_count);



                                                          
                                                        
                                                         
                                                              echo $database_count['count(*)'];
                                       
                                                           } ?></span>
                                                </a>

                                                <div class="rs-select2--light rs-select2--md" style="width: 100%;">
                                            <select class="js-select2" name="property" style="width: 100%;">
                                                <option selected="selected">Suspended Packages</option>
                                                <?php
                                                $result = mysql_query("SELECT * FROM cartorders WHERE Activity='Suspended'  AND AccountID='$accountid'");
                                            while($row = mysql_fetch_array($result))
                                            {   
                                              $prodid = explode( ', ', $row["ProductID"] );

                                              $prodna = explode( ', ', $row["Productname"] );

                                              $subtot = explode( ', ', $row["Subtotal"] );

                                              $totpr = $row["Totalprice"];

                                              $bal = $row["Balance"];

                                              

                                              foreach ($prodna as $value => $prodnae) {
                                                echo '<option value="">'.$prodnae.' Sub-Total Price: <span class="naira"></span>'.number_format($subtot[$value]).' Total Price: <span class="naira"></span>'.number_format($totpr).' Balance: <span class="naira"></span>'.number_format($bal).'</option>';
                                              }
                                            }
                ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                            </div>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <i class="fa fa-bell-o"></i> Deferred Packages
                                                    <span class="badge badge-success pull-right"  style="margin-left: 10px;">
                                                      <?php $count = "SELECT count(*) FROM cartorders WHERE Activity='Deferred'  AND AccountID='$accountid'";
                                                        $database_count = mysql_query($count);{
                                                        $DuetiesDesc = array();
                                                        $database_count=mysql_fetch_assoc($database_count);



                                                          
                                                        
                                                         
                                                              echo $database_count['count(*)'];
                                       
                                                           } ?></span>
                                                </a>
                                                <div class="rs-select2--light rs-select2--md" style="width: 100%;">
                                            <select class="js-select2" name="property" style="width: 100%;">
                                                <option selected="selected">Deferred Packages</option>
                                                <?php
                                                $result = mysql_query("SELECT * FROM cartorders WHERE Activity='Deferred'  AND AccountID='$accountid'");
                                            while($row = mysql_fetch_array($result))
                                            {   
                                              $prodid = explode( ', ', $row["ProductID"] );

                                              $prodna = explode( ', ', $row["Productname"] );

                                              $subtot = explode( ', ', $row["Subtotal"] );

                                              $totpr = $row["Totalprice"];

                                              $bal = $row["Balance"];

                                              

                                              foreach ($prodna as $value => $prodnae) {
                                                echo '<option value="">'.$prodnae.' Sub-Total Price: <span class="naira"></span>'.number_format($subtot[$value]).' Total Price: <span class="naira"></span>'.number_format($totpr).' Balance: <span class="naira"></span>'.number_format($bal).'</option>';
                                              }
                                            }
                ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                            </div>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">
                                                    <i class="fa fa-comments-o"></i> Completed Packages
                                                    <span class="badge badge-warning pull-right r-activity"  style="margin-left: 10px;">
                                                      <?php $count = "SELECT count(*) FROM cartorders WHERE Activity='Completed' AND AccountID='$accountid'";
                                                        $database_count = mysql_query($count);{
                                                        $DuetiesDesc = array();
                                                        $database_count=mysql_fetch_assoc($database_count);



                                                          
                                                        
                                                         
                                                              echo $database_count['count(*)'];
                                       
                                                           } ?></span>
                                                </a>
                                                <div class="rs-select2--light rs-select2--md" style="width: 100%;">
                                            <select class="js-select2" name="property" style="width: 100%;">
                                                <option selected="selected">Completed Packages</option>
                                                <?php
                                                $result = mysql_query("SELECT * FROM cartorders WHERE Activity='Completed'  AND AccountID='$accountid'");
                                            while($row = mysql_fetch_array($result))
                                            {   
                                              $prodid = explode( ', ', $row["ProductID"] );

                                              $prodna = explode( ', ', $row["Productname"] );

                                              $subtot = explode( ', ', $row["Subtotal"] );

                                              $totpr = $row["Totalprice"];

                                              $bal = $row["Balance"];

                                              

                                              foreach ($prodna as $value => $prodnae) {
                                                echo '<option value="">'.$prodnae.' Sub-Total Price: <span class="naira"></span>'.number_format($subtot[$value]).' Total Price: <span class="naira"></span>'.number_format($totpr).' Balance: <span class="naira"></span>'.number_format($bal).'</option>';
                                              }
                                            }
                ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                            </div>
                                            </li>
                                        </ul>

                                    </section>
                                </aside>
                            </div> 
                                        
                    

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <?php
include('footer-student.php');
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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

</body>

</html>
<!-- end document-->
