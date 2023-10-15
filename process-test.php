<?php
include('db.php');
include("session.php");

$exid = $_GET['id'];
$friga = $_GET['course'];
$exid = mysql_real_escape_string($exid);
$friga = mysql_real_escape_string($friga);





$resulta = mysql_query("SELECT * FROM ExamSession WHERE AccountID='$accountid' AND ExamID='$exid' ORDER BY ExamSessionID DESC LIMIT 1");
$counta = mysql_num_rows($resulta);

$resultb = mysql_query("SELECT * FROM ExamSession WHERE AccountID='$accountid' AND ExamID='$exid' AND Status='Completed' ORDER BY ExamSessionID DESC LIMIT 1");
$countb = mysql_num_rows($resultb);


if($counta > 0 && $countb > 0){
	header("location: test-completed");
} else {

$status = 'In-Progress';
$exid = $_GET['id'];

$result=mysql_query("SELECT * from Exam WHERE ExamID='$exid' LIMIT 1");
$time=mysql_fetch_array($result);
$expected = $time['Duration'];
$targetDate = time() + ($expected * 60);

mysql_query("INSERT INTO  `loxjkzbj_edugoglowwebdb`.`ExamSession` (

`ExamSessionID` ,
`Course` ,
`AccountID` ,
`EndSession` ,
`ExamID` ,
`Status`
)

VALUES (
null, '$friga', '$accountid', '$targetDate', '$exid', '$status'
)");


$result = mysql_query("SELECT * FROM ExamSession WHERE AccountID='$accountid' AND ExamID='$exid' ORDER BY ExamSessionID DESC LIMIT 1");
$row=mysql_fetch_array($result);
$exsesid = $row['ExamSessionID'];

header("location: start-test.php?course=$friga&exid=$exid&exsesid=$exsesid");
}


?>