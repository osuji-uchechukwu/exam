<?php
include('db.php');

$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);


$query="SELECT * FROM students WHERE Username='$username' AND Password='$password'";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result)) {
																$client_id = $row["StudentID"];
																$verify_id = $row["Verification"];
																$verdict = "Unverified";
																$verdicto = "Verified";
																
															}
//$row=mysql_fetch_array($query);
if(mysql_num_rows($result)>0 AND $verify_id == $verdict)
{
header("location: ../student-verification.php?verif_id=$username");
}

else if(mysql_num_rows($result)>0 AND $verify_id == $verdicto)
{
session_start();
$_SESSION['id']=$client_id;
header("location: student-section");
}

else{
header("location: student-login-failed");
}

?>