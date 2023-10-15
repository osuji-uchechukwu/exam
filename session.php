<?php
include('db.php');
session_start();
if(!isset($_SESSION['id']))
{
header('location: student-login.php');
}

$student_id=$_SESSION['id'];
$query = mysql_query("SELECT * from students where StudentID = '$student_id'")or die(mysql_error());
$row = mysql_fetch_array($query);


$accountid = $row['AccountID'];
$username = $row['Username'];
$phonenumber = $row['Phonenumber'];
$lastname = $row['Lastname'];
$secondname = $row['Secondname'];
$firstname = $row['Firstname'];
$dob = $row['DateOfBirth'];
$gender = $row['Gender'];
$nameofspon = $row['NameOfSponsor'];
$phoneofspon = $row['PhoneOfSponsor'];
$state = $row['State'];
$lga = $row['LGA'];
$address = $row['Address'];
$afile2 = $row['Afile2'];
$coursecode = $row['CourseCode'];
$courseactivity = $row['CourseActivity'];
?>