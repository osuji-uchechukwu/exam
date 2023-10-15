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
    <meta name="description" content="Online Shopping:Office Supplies, Projectors, Phones &amp; Tablets, Laptops, Phone Accessories, Furniture, Printers, Hire Projector, Hire Public Adress System, Clothing Accessories, Fashion, In Nigeria - Goglow" />
    <meta name="keywords" content="Dashboard - Online Shopping:Office Supplies, Projectors, Phones &amp; Tablets, Laptops, Phone Accessories, Furniture, Printers, Hire Projector, Hire Public Adress System, Clothing Accessories, Fashion, In Nigeria - Goglow" />

    <!-- Title Page-->
    <title>Choose Test - Goglow Dashboard</title>

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
                                <h3 class="title-5 m-b-35">Choose Test</h3>








                                <div class="table-data__tool">
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
                                    <?php

                                  include('db.php');
        // find out how many rows are in the table 

$sql = "SELECT COUNT(*) FROM Exam";

$result = mysql_query($sql, $db) or trigger_error("SQL", E_USER_ERROR);

$r = mysql_fetch_row($result);

$numrows = $r[0];



// number of rows to show per page

$rowsperpage = 20;

// find out total pages

$totalpages = ceil($numrows / $rowsperpage);



// get the current page or set a default

if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {

   // cast var as int

   $currentpage = (int) $_GET['currentpage'];

} else {

   // default page num

   $currentpage = 1;

} // end if



// if current page is greater than total pages...

if ($currentpage > $totalpages) {

   // set current page to last page

   $currentpage = $totalpages;

} // end if



// if current page is less than first page...

if ($currentpage < 1) {

   // set current page to first page

   $currentpage = 1;

} // end if



// the offset of the list, based on current page 

$offset = ($currentpage - 1) * $rowsperpage;





/******  build the pagination links ******/

// range of num links to show

$range = 3;
        // if not on page 1, don't show back links

echo '<div class="pagination" style="margin-left: 30px;">';

if ($currentpage > 1) {

   // show << link to go back to page 1

   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1' class='btn btn-danger btn-xs'>&laquo;</a> ";

   // get previous page num

   $prevpage = $currentpage - 1;

   // show < link to go back to 1 page

   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage' class='btn btn-danger btn-xs'>prev</a> ";

} // end if 



// loop to show links to range of pages around current page

for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {

   // if it's a valid page number...

   if (($x > 0) && ($x <= $totalpages)) {

      // if we're on current page...

      if ($x == $currentpage) {

         // 'highlight' it but don't make a link

         echo '<a class="btn btn-success btn-xs" style="color: #ffffff;">'.$x.'</a>';

      // if not current page...

      } else {

         // make it a link

         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x' class='btn btn-danger btn-xs'>$x</a> ";

      } // end else

   } // end if 

} // end for







// if not on last page, show forward and last page links        

if ($currentpage != $totalpages) {

   // get next page

   $nextpage = $currentpage + 1;

    // echo forward link for next page 

   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage' class='btn btn-danger btn-xs'>next</a> ";

   // echo forward link for lastpage

   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages' class='btn btn-danger btn-xs'>&raquo;</a> ";

} // end if

echo '</div>';

/****** end build pagination links ******/
        ?>
                                </div>
                                <div class="table-responsive table-responsive-data2" style="overflow:scroll; overflow-x:auto; height: 370px;">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                
                                  <th><i class="fa fa-bullhorn"></i> S/N</th>
                                  <th><i class="fa fa-question-circle"></i> Exam Code Name</th>
                                  <th><i class="fa fa-bookmark"></i> Exam Status</th>
                                  <th><i class="fa fa-bookmark"></i> Duration</th>
                                  <th><i class=" fa fa-edit"></i> Action</th>
                                  <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>







                                            <?php
                include('db.php');

                  function excerpti($content,$numberOfWords = 10){     
                    $contentWords = substr_count($content," ") + 1;
                    $words = explode(" ",$content,($numberOfWords+1));
                    if( $contentWords > $numberOfWords ){
                        $words[count($words) - 1] = '....';
                    }
                    $excerpti = join(" ",$words);
                    return $excerpti;
                }



                $result = mysql_query("SELECT * FROM Exam ORDER BY ExamID DESC LIMIT $offset, $rowsperpage");
                while($row = mysql_fetch_array($result))
                {
                $friga = $row['Course'];
                $exid = $row['ExamID'];
                $duration = $row['Duration'];
                
                                           echo ' <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>'.$row['ExamID'].'</td>
                                                <td>'.$row['ExamCodeName'].'</td>
                                                <td>
                                                    '.$row['ExamStatus'].'
                                                </td>

                                                <td>
                                                    '.$row['Duration'].'
                                                </td>

                                                <td>
                                                    <div class="table-data-feature">';


                                                    if($row['ExamStatus'] == "Enabled"){
                                                  echo "<a href=\"javascript:confirmDelete('process-test.php?course=$friga&id=$exid')\">";
                                                  echo '<button type="submit" class="btn btn-success btn-sm" id="submit" name="submit" value="START TEST">
                                                            <i class="fa fa-dot-circle-o btn-success"></i> START TEST
                                                        </button></a>';
                                                        } else {
                                                  echo '<button type="submit" class="btn btn-danger btn-sm" id="submit" name="submit" value="THIS TEST IS DISABLED">
                                                            <a href="#"><i class="fa fa-solid btn-danger"></i></a> THIS TEST IS DISABLED
                                                        </button>';
                                                        }
                                                        
                                                    echo '</div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>';
                                            }
                ?>
                                        </tbody>


<script>

function confirmDelete(delUrl) {
 if (confirm("Are you sure you want to begin your test?")) {
document.location = delUrl;
 }
} 
</script>



                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                            <?php

                                  include('db.php');
        // find out how many rows are in the table 

$sql = "SELECT COUNT(*) FROM Exam";

$result = mysql_query($sql, $db) or trigger_error("SQL", E_USER_ERROR);

$r = mysql_fetch_row($result);

$numrows = $r[0];



// number of rows to show per page

$rowsperpage = 20;

// find out total pages

$totalpages = ceil($numrows / $rowsperpage);



// get the current page or set a default

if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {

   // cast var as int

   $currentpage = (int) $_GET['currentpage'];

} else {

   // default page num

   $currentpage = 1;

} // end if



// if current page is greater than total pages...

if ($currentpage > $totalpages) {

   // set current page to last page

   $currentpage = $totalpages;

} // end if



// if current page is less than first page...

if ($currentpage < 1) {

   // set current page to first page

   $currentpage = 1;

} // end if



// the offset of the list, based on current page 

$offset = ($currentpage - 1) * $rowsperpage;





/******  build the pagination links ******/

// range of num links to show

$range = 3;
        // if not on page 1, don't show back links

echo '<div class="pagination" style="margin-left: 30px;">';

if ($currentpage > 1) {

   // show << link to go back to page 1

   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1' class='btn btn-danger btn-xs'>&laquo;</a> ";

   // get previous page num

   $prevpage = $currentpage - 1;

   // show < link to go back to 1 page

   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage' class='btn btn-danger btn-xs'>prev</a> ";

} // end if 



// loop to show links to range of pages around current page

for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {

   // if it's a valid page number...

   if (($x > 0) && ($x <= $totalpages)) {

      // if we're on current page...

      if ($x == $currentpage) {

         // 'highlight' it but don't make a link

         echo '<a class="btn btn-success btn-xs" style="color: #ffffff;">'.$x.'</a>';

      // if not current page...

      } else {

         // make it a link

         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x' class='btn btn-danger btn-xs'>$x</a> ";

      } // end else

   } // end if 

} // end for







// if not on last page, show forward and last page links        

if ($currentpage != $totalpages) {

   // get next page

   $nextpage = $currentpage + 1;

    // echo forward link for next page 

   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage' class='btn btn-danger btn-xs'>next</a> ";

   // echo forward link for lastpage

   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages' class='btn btn-danger btn-xs'>&raquo;</a> ";

} // end if

echo '</div>';

/****** end build pagination links ******/
        ?>
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
