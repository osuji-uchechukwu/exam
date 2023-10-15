<?php

include('db.php');



$acctid=mysql_real_escape_string($_POST['AccountID']);

$unme=mysql_real_escape_string($_POST['username']);

$pwd=mysql_real_escape_string($_POST['password']);

$fnme=mysql_real_escape_string($_POST['firstname']);

$snme=mysql_real_escape_string($_POST['secondname']);

$lnme=mysql_real_escape_string($_POST['lastname']);

$dob=mysql_real_escape_string($_POST['dateofbirth']);

$gender=mysql_real_escape_string($_POST['gender']);

$ctry=mysql_real_escape_string($_POST['country']);

$state=mysql_real_escape_string($_POST['state']);

$lga=mysql_real_escape_string($_POST['lga']);

$adres=mysql_real_escape_string($_POST['address']);

$phn=mysql_real_escape_string($_POST['phonenumber']);

$nameofspon=mysql_real_escape_string($_POST['nameofsponsor']);

$phoneofspon=mysql_real_escape_string($_POST['phonenumberofsponsor']);

$verif = "Verified";

$econ=mysql_real_escape_string($_POST['econtract']);

$coursecod = "Nil";

$courseactivity = "Inactive";








$sqla = "SELECT * FROM students WHERE Username='$unme'";
    
    $resa = mysql_query($sqla);
    

    if (mysql_num_rows($resa) > 0) {

      header("location: ../student-account-already-exists");
        
    }elseif(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $unme)){
    // Return Error - Invalid Email
    header("location: ../invalid-student-email");
}else{










$image2= addslashes(file_get_contents($_FILES['image2']['tmp_name']));

$image2_name= addslashes($_FILES['image2']['name']);

$image2_file_type= pathinfo($image2_name,PATHINFO_EXTENSION);

$image2_size= getimagesize($_FILES['image2']['tmp_name']);



// Limiting what file formats are allowed
if($image2_file_type != "gif" && $image2_file_type != "jpg" && $image2_file_type != "jpeg" && $image2_file_type != "png" && $image2_file_type != "pdf" && $image2_file_type != "docx" && $image2_file_type != "doc") {
    header("location: ../invalid-student-file-format");
} else {
	move_uploaded_file($_FILES['image2']['tmp_name'],"../upload/".$_FILES['image2']['name']);

	$location2="upload/".$_FILES['image2']['name'];






mysql_query("INSERT INTO `loxjkzbj_edugoglowwebdb`.`students` (`StudentID`, `AccountID`, `Username`, `Password`, `Firstname`, `Secondname`, `Lastname`, `DateOfBirth`, `Gender`, `Phonenumber`, `NameOfSponsor`, `PhoneOfSponsor`, `Verification`, `Country`, `State`, `LGA`, `Address`, `ContractAgreement`, `Afile2`, `CourseCode`, `CourseActivity`, `RegDate`) VALUES (NULL, '$acctid', '$unme', '$pwd', '$fnme', '$snme', '$lnme', '$dob', '$gender', '$phn', '$nameofspon', '$phoneofspon', '$verif', '$ctry', '$state', '$lga', '$adres', '$econ', '$location2', '$coursecod', '$courseactivity', CURRENT_TIMESTAMP)");





















header("location: student-mail.php?mail_id=$unme&fnme=$fnme&snme=$snme&lnme=$lnme");



	}
}

?>