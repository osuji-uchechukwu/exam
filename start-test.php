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
    <title>Start Test - Goglow Dashboard</title>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

<style type="text/css">
    .section {
display: none;
}

.section.active{
display: block;
}

.invisible {
    display: none;
}

ul {
list-style: none;
margin:0;
padding: 0;
display: flex;
align-items: center;
}

ul li {
background: #ccc;
padding: 10px 15px;
margin-left: 6px;
border-radius: 50%;
cursor: pointer;
opacity: .5;
}

ul li.active{
opacity: 1 !important;
}

.next,
.previous {
padding: 15px 10px;
border-radius: 6px;
background: deepskyblue;
color: white;
border:0;
outline: none;
cursor: pointer;
width: 100px;
}


.next:hover,
.previous:hover {
color: #ffffff;
}

.next.disable,
.previous.disable{
  cursor: none;
  opacity: .5;
}
  </style>
</head>

<body class="" onLoad="setCountDown();">
    
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Start Goglow Hub Test</h3>








                                <!--<div class="table-data__tool">
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
                                    </div>-->

<?php

 include('db.php');
        
?>

  
                                </div>
                                <div class="" style="">
                                 <form class="form-horizontal" style="background-color: #ffffff; padding: 20px;">
          <?php
         
  $course = $_GET['course'];
  $exid = $_GET['exid'];
  $exsesid = $_GET['exsesid'];
  $result = mysql_query("SELECT * FROM ExamSession WHERE ExamSessionID='$exsesid'");
  $row = mysql_fetch_array($result);
  $expected = $row['EndSession'];
  $targetDate = $expected;
  
      $dateFormat  = "d F Y -- g:i a";
      $actualDate  = time();
      $secondsDiff = $targetDate - $actualDate;
      $remainingDay      = floor($secondsDiff/60/60/24);
      $remainingHour     = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
      $remainingMinutes  = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
      $remainingSeconds  = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
      $actualDateDisplay = date($dateFormat,$actualDate);
      $targetDateDisplay = date($dateFormat,$targetDate);
    
          ?>

        <div id="remain">
         <?php echo "$remainingHour hours, $remainingMinutes minutes, $remainingSeconds seconds";?>
        </div>

        <script type="text/javascript">


            var days = <?php echo $remainingDay; ?>  
      var hours = <?php echo $remainingHour; ?>  
      var minutes = <?php echo $remainingMinutes; ?>  
      var seconds = <?php echo $remainingSeconds; ?> 
      function setCountDown ()
      {
          seconds--;
          if (seconds < 0){
             minutes--;
             seconds = 59
          }
          if (minutes < 0){
              hours--;
              minutes = 59
          }
          if (hours < 0){
              hours = 23
          }
          document.getElementById("remain").innerHTML = "  "+hours+" hr "+minutes+" min    "+seconds+" sec";
          SD=window.setTimeout( "setCountDown()", 1000 );
          if (minutes == '00' && seconds == '00') { 
              seconds = "00"; window.calculateScore();
          } 

       }

            
        </script>




                <a href="#" class="previous disable" id="previous">Previous</a>
                <a href="#"  class="next" id="next">Next</a>
                <button type="button" class="next" onclick="confirmCalculateScore()">
                    Submit
                </button>
                <div id="result"></div>
                <div class="tab-content">


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


                $course = $_GET['course'];

                $result = mysql_query("SELECT * FROM ExamQuestions WHERE Course='$course' ORDER BY QuestionID DESC");
                $counta = mysql_num_rows($result);
                while($row = mysql_fetch_array($result))
                {
                $qstid = $row['QuestionID'];
                $course = $row['Course'];
                $qst = $row['Question'];
                $yr = $row['Year'];
                                          
                                           echo '<div id="r'.$qstid.'" class="section">';
                                           echo '<div style="font-weight: bolder; font-size: 30px;">'.$qst.'</div>';
                                            
                                    ?>
                                      

                                     
                                      <?php
            include('db.php');
            $ida = $qstid;
            $resulta = mysql_query("SELECT * FROM ExamAnswers WHERE QuestionID='$ida' ORDER BY Answer ASC");
            
              
             
              while($row = mysql_fetch_array($resulta))
              {
              $rows = $row['Answer'];
              $aid = $row['AnswerID'];
              $qid = $row['QuestionID'];
              $status = $row['Status'];
              
              
               
              $nama = array("Answer A", "Answer B", "Answer C", "Answer D", "Answer E");
              $neme = array("answera", "answerb", "answerc", "answerd", "answere");
              $nimi = array("answer-a", "answer-b", "answer-c", "answer-d", "answer-e");
              $numu = array("A", "B", "C", "D", "E");


              $pana = array("ANSWERID A", "ANSWERID B", "ANSWERID C", "ANSWERID D", "ANSWERID E");
              $pene = array("answerida", "answeridb", "answeridc", "answeridd", "answeride");
              $pini = array("answerid-a", "answerid-b", "answerid-c", "answerid-d", "answerid-e");
                

             
    
              echo' <div class="row form-group">
                                                
                      <div class="col-12 col-md-12">
                          <label for="" class="form-control-label"></label>
                          <input type="radio" class="radio" name="answer'.$qid.'" id="r'.$aid.'" placeholder="" value="'.$status.'">
                                                    
                          <label for="r'.$aid.'" class="form-control-label">'.$rows.'</label>
                       
                      </div>
                                            </div>';
                                         
                                          }

                                          echo '</div>';

                                        }

                                        echo '</div>';

                                        echo '<ul class="nav">';
                                        for ($x = 1; $x <= $counta; $x++) {
                                        echo '<li class="li" data-cont="r'.$x.'">'.$x.'</li>';
                                      }
                                        echo '</ul>';
                                       
                                          ?>


                                        
                                           </form>



<script>

function confirmCalculateScore() {
 if (confirm("Are you sure you want to end test?")) {
        window.calculateScore();
 }
} 
</script>





<script type="text/javascript">


function calculateScore() {
var x = document.getElementsByClassName('radio');
  var rate_value = 0;
  for(var i = 0; i < x.length; i++){
      if(x[i].checked){
          rate_value += parseInt(x[i].value);
      }
  }
 //now set your hidden field value
   //document.getElementById("result").innerHTML = rate_value;
   window.clearTimeout(SD);
   window.location = "stop-test.php?exsesid=<?php $exsesid = $_GET['exsesid']; echo $exsesid;?>&course=<?php $course = 
   $_GET['course']; echo $course;?>&exid=<?php $exid = $_GET['exid']; echo $exid;?>&totquest=<?php echo $counta;?>&score="+rate_value+""
}






let currentSection = 0;
let sections = document.querySelectorAll(".section");
let sectionButtons = document.querySelectorAll(".nav > li");
let nextButton = document.querySelector(".next");
let previousButton = document.querySelector(".previous");


$(document).ready(function(){
    

$(".tab-content").each(function() {
  $(this).children(".section").first().addClass("active");
});


$(".nav").each(function() {
  $(this).children(".li").first().addClass("active");
});




      });





for (let i = 0; i < sectionButtons.length; i++) {
    sectionButtons[i].addEventListener("click", function() {
        sections[currentSection].classList.remove("active");
        sectionButtons[currentSection].classList.remove("active");
        sections[currentSection = i].classList.add("active");
        sectionButtons[currentSection].classList.add("active");
        if (i === 0) {
            if (previousButton.className.split(" ").indexOf("disable") < 0) {
                previousButton.classList.add("disable");
            }
        } else {
            if (previousButton.className.split(" ").indexOf("disable") >= 0) {
                previousButton.classList.remove("disable");
            }
        }
        if (i === sectionButtons.length - 1) {
            if (nextButton.className.split(" ").indexOf("disable") < 0) {
                nextButton.classList.add("disable");
            }
        } else {
            if (nextButton.className.split(" ").indexOf("disable") >= 0) {
                nextButton.classList.remove("disable");
            }
        }
    });
}

nextButton.addEventListener("click", function() {
    if (currentSection < sectionButtons.length - 1) {
        sectionButtons[currentSection + 1].click();
    }
});

previousButton.addEventListener("click", function() {
    if (currentSection > 0) {
        sectionButtons[currentSection - 1].click();
    }
});
</script>










                                </div>
                                <!-- END DATA TABLE -->
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
