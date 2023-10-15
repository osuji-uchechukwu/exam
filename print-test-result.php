<?php
include('db.php');
include("session.php");
?>

<!DOCTYPE html>
<html>
<head>


<!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="goglowlimited">
    <meta name="keywords" content="au theme template">
    <meta name="description" content="Online Training Hub:Learn Web Development, Graphics Design, App Development, Programming, Software Development, UI/UX Design, IELTS & TOEFL Training, Jamb Registrations, CBT Trainings, Office Supplies, Projectors, Phones &amp; Tablets, Laptops, Phone Accessories, Furniture, Printers, Hire Projector, Hire Public Adress System, Clothing Accessories, Fashion, Tech In Nigeria - Goglow" />
    <meta name="keywords" content="Dashboard - Online Training Hub:Learn Web Development, Graphics Design, App Development, Programming, Software Development, UI/UX Design, IELTS & TOEFL Training, Jamb Registrations, CBT Trainings, Office Supplies, Projectors, Phones &amp; Tablets, Laptops, Phone Accessories, Furniture, Printers, Hire Projector, Hire Public Adress System, Clothing Accessories, Fashion, Tech In Nigeria - Goglow" />

    <!-- Title Page-->
    <title>Print Test Result - Goglow Dashboard</title>

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

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
</head>
<body>






  <div class="page-wrapper">
        <div class="page-content--bge5" style="background-color: #e6e600;">
            <div class="container" style="background-color: #000000;">
                <div class="login-wrap" style="overflow:scroll; overflow-x:auto; height: 700px;">
                    <div class="login-content">
                      <input class="au-btn au-btn-icon au-btn--green au-btn--small" type="button" value="print" onclick="PrintDiv();" />
                      <a href="student-section" class="au-btn au-btn-icon au-btn--green au-btn--small">
                        Back to Home Page
                      </a>
                        <div class="login-logo" style="margin-top: 10px;">
                            <a href="#">
                                <img src="../images/icons/gog1.png" style="max-height: 100px;" alt="Goglow">
                            </a>
                        </div>
                        <div class="login-form" id="divToPrint">
                        
                           <?php 
$exid = $_GET['exid'];
$exid = mysql_real_escape_string($exid);
$result=mysql_query("SELECT * from Results WHERE AccountID='$accountid' AND ExamID='$exid' LIMIT 1");
$row=mysql_fetch_array($result);
$resultsid = $row['ResultsID'];
$verifyid = $row['VerifyID'];
$examcode = $row['ExamCodeName'];
$course = $row['Course'];
$score = $row['Score'];
$examdate = $row['ExamDate'];
$totquest = $row['TotalQuestion'];


$resulta = mysql_query("SELECT * FROM ExamQuestions WHERE Course='$course'");
$counta = mysql_num_rows($resulta);
$value = ($score/$totquest)*100;
$percent = round($value, 1);
echo '<table>
  <tr>
  <th>
  <div class="avatar-wrap online">
  <div class="avatar" style="max-height: 150px;">
    <img src="../'.$afile2.'" alt="'.$firstname.'"  style="height: 100%;">
  </div>
  </div>
  </th>
  <th>'.$firstname.' '.$secondname.' '.$lastname.'</th>
  </tr>
  <tr>
  <td>AccountID</td>
  <td>'.$accountid.'</td>
  </tr>
  <tr>
  <td>Username</td>
  <td>'.$username.'</td>
  </tr>
  <tr>
  <td>Verification ID</td>
  <td>'.$verifyid.'</td>
  </tr>
  <tr>
  <td>Exam Code</td>
  <td>'.$examcode.'</td>
  </tr>
  <tr>
  <td>Course</td>
  <td>'.$course.'</td>
  </tr>
  <tr>
  <td>Score</td>
  <td>'.$percent.'%</td>
  </tr>
  <tr>
  <td>Grade</td>
  <td>';

  if ($percent >= 70) {
  echo "A";
} elseif ($percent >= 60) {
  echo "B";
} elseif ($percent >= 50) {
  echo "C";
} elseif ($percent >= 45) {
  echo "D";
} elseif ($percent >= 40) {
  echo "E";
} elseif ($percent >= 0) {
  echo "F";
} else {
  echo "Result Not Found!";
}

echo '</td>
  </tr>
  <tr>
  <td>Date</td>
  <td>'.$examdate.'</td>
  </tr>
  <tr>
  <td>Gender</td>
  <td>'.$gender.'</td>
  </tr>
  <tr>
  <td>Date of Birth</td>
  <td>'.$dob.'</td>
  </tr>
  <tr>
  <td>Phone Number</td>
  <td>'.$phonenumber.'</td>
  </tr>
  <tr>
  <td>State</td>
  <td>'.$state.'</td>
  </tr>
  <tr>
  <td>LGA</td>
  <td>'.$lga.'</td>
  </tr>
  <tr>
  <td>Address</td>
  <td>'.$address.'</td>
  </tr>
  <tr>
  <td>Name of Sponsor</td>
  <td>'.$nameofspon.'</td>
  </tr>
  <tr>
  <td>Phone Number of Sponsor</td>
  <td>'.$phoneofspon.'</td>
  </tr>
  <tr>
  <td colspan="2">
  <p style="font-weight: bolder;">The Official result sheet of the Goglow Hub</p>
  <p style="font-weight: bolder;">Copyright © <script>document.write(new Date().getFullYear());</script> Goglow. All rights reserved. By <a href="../index">Goglow Hub</a>.</p>
  </td>
  </tr>
</table>';
?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

  
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><head><link rel="icon" type="image/png" href="../images/icons/g1.png"/><link href="css/font-face.css" rel="stylesheet" media="all"><link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"><link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all"><link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"><!-- Bootstrap CSS--><link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all"><!-- Vendor CSS--><link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all"><link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all"><link href="vendor/wow/animate.css" rel="stylesheet" media="all"><link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all"><link href="vendor/slick/slick.css" rel="stylesheet" media="all"><link href="vendor/select2/select2.min.css" rel="stylesheet" media="all"><link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all"><!-- Main CSS--><link href="css/theme.css" rel="stylesheet" media="all"><style>table {border-collapse: collapse;width: 100%}th, td {text-align: left;padding: 8px}tr:nth-child(even) {background-color: #D6EEEE}</style></head><body onload="window.print()"><div class="page-wrapper" style="background-color: #ffffff;"><div class="page-content--bge5" style="background-color: #e6e600;"><div class="container" style="background: #000000;"><div class="login-wrap"><div class="login-content"><input class="au-btn au-btn-icon au-btn--green au-btn--small" type="button" value="print" onclick="PrintDiv();" /><div class="login-logo"><a href="#"><img src="../images/icons/gog1.png" style="max-height: 100px;" alt="Goglow"></a></div><div class="login-form" id="divToPrint">' + divToPrint.innerHTML + '</div></div></div></div></div></div></body></html>');
        popupWin.document.close();
            }
 </script>
  

</body>
</html>