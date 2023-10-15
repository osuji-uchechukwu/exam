<?php
include('db.php');
include("session.php");
include('../randomcode.php');


$examdate = date("l jS \of F Y h:i:s A");
$exsesid = $_GET['exsesid'];
$exid = $_GET['exid'];
$course = $_GET['course'];
$score = $_GET['score'];
$totquest = $_GET['totquest'];

mysql_query("UPDATE ExamSession SET Status='Completed' WHERE ExamSessionID='$exsesid'");

$result=mysql_query("SELECT * from Exam WHERE ExamID='$exid' LIMIT 1");
$row=mysql_fetch_array($result);
$examcode = $row['ExamCodeName'];





$resulta = mysql_query("SELECT * FROM Results WHERE AccountID='$accountid' AND ExamID='$exid' ORDER BY ResultsID DESC LIMIT 1");
$counta = mysql_num_rows($resulta);

if($counta > 0){
	header("location: print-test-result.php?exid=$exid");
} else {
mysql_query("INSERT INTO  `loxjkzbj_edugoglowwebdb`.`Results` (

`ResultsID` ,
`AccountID` ,
`VerifyID` ,
`ExamID` ,
`ExamCodeName` ,
`Course` ,
`Score` ,
`TotalQuestion` ,
`ExamDate`
)

VALUES (
null, '$accountid', '$ri', '$exid', '$examcode', '$course', '$score', '$totquest', '$examdate'
)");

header("location: print-test-result.php?exid=$exid");
}

?>