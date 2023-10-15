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
    <title>Student Login - Goglow Dashboard</title>

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

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="../images/icons/gog1.png" style="max-height: 100px;" alt="Goglow">
                            </a>
                        </div>






<script type="text/javascript">

function validateForm()

{

  var email = document.forms["clientloginform"]["username"].value;
    var filter = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (!filter.test(email)) {
    alert('Please provide a valid Email address');
    return false;
 }

var a=document.forms["clientloginform"]["username"].value;

if (a==null || a=="")

  {

  alert("Please Enter Username");

  return false;

  }

var b=document.forms["clientloginform"]["pass"].value;

if (b==null || b=="")

  {

  alert("Please Enter Password");

  return false;

  }

 var c=document.forms["clientloginform"]["Phone"].value;

if (c==null || c=="")

  {

  alert("Please enter Phone Number");

  return false;

  }

var d=document.forms["clientloginform"]["message"].value;

if (d==null || d=="")

  {

  alert("Please Enter the Message box");

  return false;

  }

/* var e=document.forms["addroom"]["image"].value;

if (e==null || e=="")

  {

  alert("Pls. browse an image");

  return false;

  }*/

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






                        <div class="login-form">
                            <form action="process-login.php" method="POST" name="clientloginform" onsubmit="return validateForm()" id="clientloginform"
                        novalidate="novalidate">
                                <div class="card-title">
                                            <h3 class="text-center title-2">Student Login</h3>
                                        </div>
                                <div class="form-group">
                                    <label>Student Email Address</label>
                                    <input class="au-input au-input--full" type="email" onKeyPress="this.value = this.value.toLowerCase();" onKeyUp="this.value = this.value.toLowerCase();" onKeyDown="this.value = this.value.toLowerCase();" name="username" id="username" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Student Password</label>
                                    <input class="au-input au-input--full" type="password" id="pass" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit">sign in</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="hidden" style="display: none;" class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button type="hidden" style="display: none;" class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="create-student-account">Sign Up Here</a>
                                </p>
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