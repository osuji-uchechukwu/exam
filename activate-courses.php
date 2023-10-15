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
    <title>Activate Courses - Goglow Dashboard</title>

    <!-- Fontfaces CSS-->
    <link rel="icon" type="image/png" href="../images/icons/g1.png"/>
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="" onload="myFunction()">
    <?php
include('header-student.php');
?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Activate New <?php
echo $firstname;
?> Goglow Hub Courses</h3>
                                
                            </div>











                            <script type="text/javascript">

function validateForm()

{

var a=document.forms["addblogform"]["Activate"].value;

if (a==null || a=="")

  {

  alert("Please Enter Purchase ID");

  return false;

  }

var b=document.forms["addblogform"]["Excerpt"].value;

if (b==null || b=="")

  {

  alert("Please Enter Excerpt");

  return false;

  }

 var c=document.forms["addblogform"]["Blogpost"].value;

if (c==null || c=="")

  {

  alert("Please enter Blog Post");

  return false;

  }

var d=document.forms["addblogform"]["Category"].value;

if (d==null || d=="Select Category")

  {

  alert("Please Enter Category");

  return false;

  }


  var e=document.forms["addblogform"]["Writtenby"].value;

if (e==null || e=="")

  {

  alert("Please Enter Written By");

  return false;

  }


  
  
var f=document.forms["addblogform"]["image"].value;

if (f==null || f=="")

  {

  alert("Please, browse an image for Blog Photo");

  return false;

  }


  

/*if (c.which!=8 && c.which!=0 && (c.which<48 || c.which>57))

  {

  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");

  return false;

  }

if (b.which!=8 && b.which!=0 && (b.which<48 || b.which>57))

  {

  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");

  return false;

  }*/

}

</script>


<script type="text/javascript">

      <!--

      function isNumberKey(evt)

      {

         var charCode = (evt.which) ? evt.which : event.keyCode

         if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;



         return true;

      }

      //-->

   </script>





   <script>

function myFunction() {

   var d = new Date();
document.getElementById("date").value = d.toDateString();


}

</script>                         
                            
                            
                                            
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong><?php
echo $firstname;
?></strong> Activate Courses
                                    </div>
                                    <div class="card-body card-block">


                                        

                                        <form method="post" action="insert-activate-courses.php" enctype="multipart/form-data" class="form-horizontal" name="addblogform" onsubmit="return validateForm()" id="addblogform"
                        novalidate="novalidate">
                                            <input class="form-control" type="hidden" name="Date" id="date" value="">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-activate" class="form-control-label">Purchase ID:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="Activate" name="PurchaseID" placeholder="Purchase ID" class="form-control">
                                                    
                                                </div>
                                            </div>
                               
                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit">
                                            <i class="fa fa-dot-circle-o"></i> POST
                                        </button>
                                    </div>
                                    </form>
                                </div>
                                
                                    </div>
                                </div>
                            </div>
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
