<?php




include('db.php');







          


                



// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
//require 'vendor/autoload.php';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/OAuth.php';
require 'PHPMailer/src/POP3.php';





// $email and $message are the data that is being
// posted to this page from our html contact form


$fnme=$_GET["fnme"];
$snme=$_GET["snme"];
$lnme=$_GET["lnme"];
$verif = "Verified";
$email=$_GET["mail_id"];


$result = mysql_query("SELECT * FROM students where Username='$email'");
            while($row = mysql_fetch_array($result))
            {
              $pwrd = $row['Password'];
            }

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);



try {
    //Server settings
    $mail->SMTPDebug = false;
    $mail->do_debug = 0;
    //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'linux3.utiware.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@goglowonline.com';                     // SMTP username
    $mail->Password   = 'GOGLOWadmin1';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@goglowonline.com', 'Goglow Hub');
    $mail->addAddress($email);     // Add a recipient
    $mail->addAddress('admin@goglowonline.com', 'Client Account Confirmation');               // Name is optional
    $mail->addReplyTo('info@goglowonline.com', 'Client Account Confirmation');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('reciept.pdf');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    //$mail->AddEmbeddedImage('images/icons/gog3.png', 'goglowlogo', 'gog3.png');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Goglow Hub - Student Account Confirmation';
    $mail->Body    = '<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 30px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #ffffff;
  width: 100%;
  padding: 0px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1><img src="https://www.goglowonline.com/images/icons/gog2.png" style="max-height: 150px;"></h1>
  <h1>Confirmation of Student Account</h1>
  <p><i>...glowing with quality trainings & ICT services</i></p>
</div>

<div class="topnav">
  <a href="https://hub.goglowonline.com">Home</a>
  <a href="https://hub.goglowonline.com/products">Courses</a>
  <a href="https://hub.goglowonline.com/solar-panel-installation/">Services</a>
  <a href="https://hub.goglowonline.com/goglow-student/student-section" style="float:right">Login</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Hello! <b>'.$fnme.' '. $lnme.'</b></h2>
      <h5>Confirmation of Student Account</h5>
      <div class="fakeimg" style="max-height:100%;"><img src="https://www.goglowonline.com/images/help1.jpg" style="height: 100%; max-width: 100%;"></div>
      <p>Dear <b>'.$fnme.' '. $lnme.'</b> you have successfully created a student account with Goglow Hub. Kindly check your inbox for our reply within the next 24 hours. We are always at your service. We will get back to you shortly.</p>
      <p>Thanks you for choosing Goglow!</p>
      <h3>Your Goglow Hub Account Details</h3>
      <p>Username: '.$email.'</p>
      <p>Password: '.$pwrd.'</p>
    </div>
    <div class="card">
      <h2>WHAT MORE DOES GOGLOW OFFER?</h2>
      <h5>From paper to printer cartridges, stationery to business requirements on technology products, we have an ever expanding range of products to make your business stay ahead of every business in Nigeria.

Goglow Nigeria Limited aims to bridge the gap between the online customer and the brick and mortar retail chain. We want to be a trusted destination for people across the country to source their food items, clothing & fashion accessories, home supplies, personal use deliverables and office supplies.</h5>
      <div class="fakeimg" style="max-height:100%;"><img src="https://www.goglowonline.com/images/blogee8.jpg" style="height: 100%; max-width: 100%;"></div>
      <p>www.goglowonline.com, operated by Goglow Nigeria Limited incorporated in the year 2001, aims to be Nigeria"s largest offline and online office products company serving businesses of all sizes for everything they require to run their workspaces and offices, classrooms and laboratories, auditoriums and conference halls.</p>
      <p><i>"...glowing with quality goods and services..."</i>
Currently operating in over 5 stores in Nigeria, Goglow has several distribution points across the country. We shall actively ensure to supply the products to you on time.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Goglow</h2>
      <div class="fakeimg" style="height:100px;  width: 100%;"><img src="https://www.goglowonline.com/images/blogee3.jpg" style="height: 100%; width: 100%;"></div>
      <p>We help small and medium sized companies, Individuals and corporate bodies by providing them with a one-stop-solution office supply store and a large variety of quality products and services at competitive prices.</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p><img src="https://www.hub.goglowonline.com/pop-up/ad69.png" style="max-height: 100%; max-width: 100%;"></p></div>
      <div class="fakeimg"><p><img src="https://www.hub.goglowonline.com/pop-up/ad71.jpg" style="max-height: 100%; max-width: 100%;"></p></div>
      <div class="fakeimg"><p><img src="https://www.hub.goglowonline.com/pop-up/ad70.png" style="max-height: 100%; max-width: 100%;"></p></div>
    </div>
    <div class="card">
      <h3>Follow Us @</h3>
      <p>www.hub.goglowonline.com</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>GET IN TOUCH
Any questions? 

<br />Let us know in store at 1st floor, 19 Wetheral Road, Cherubim Junction, Owerri, Imo State, Nigeria or call us on +234(0)807-400-2374, +234(0)814-756-1478.

<br />Copyright © 2022 All rights reserved. |  @ GOGLOW HUB </h2>
</div>

</body>
</html>

';
    $mail->AltBody = 'www.hub.goglowonline.com - Student Account Notification';

    $mail->send();
    
//echo 'Message has been sent';
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



header("location: student-section");



?>