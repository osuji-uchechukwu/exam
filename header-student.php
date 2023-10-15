<div class="page-wrapper">
        <!-- HEADER MOBILE-->



        <?php
                include('db.php');

                $result = mysql_query("SELECT * FROM students WHERE StudentID=$student_id");
                while($row = mysql_fetch_array($result))
                {
        echo '<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="">
                        <div class="avatar-wrap online">
                                                                <div class="avatar" style="max-height: 150px;">
                                                                    <img src="../'.$row['Afile2'].'" style="height: 100%;" alt="'.$row['Firstname'].'" />
                                                                </div>
                                                            </div>
                            
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>';
        }
        ?>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="student-section">Student Section</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>View Items</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                          <li><a  href="view-student-account">My <?php
echo $firstname;
?> Account</a></li>
                          <li><a  href="view-attendance">My Lecture Attendance</a></li>
                          <li><a  href="view-active-courses">Active Courses</a></li>
                          <li><a  href="view-results">Results</a></li>
                          <li><a  href="view-all-balances">All Balances</a></li>
                          <li><a  href="view-all-blogposts">All Blogposts</a></li>
                          <li><a  href="view-all-courses">All Courses</a></li>
                          <li><a  href="view-messages">All New Messages</a></li>
                            </ul>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Add New Item</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                          <li><a  href="activate-courses">Activate Courses</a></li>
                          <li><a  href="add-new-blog-post">Add New Blogpost</a></li>
                          <li><a  href="choose-test">Start Test</a></li>
                          <li><a  href="pay-balances">Pay Balances</a></li>
                          <li><a  href="submit-assignment">Submit Assignment</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">



            <?php
                include('db.php');
            $result = mysql_query("SELECT * FROM students WHERE StudentID=$student_id");
                while($row = mysql_fetch_array($result))
                {
            echo '<div class="logo">
                <a href="">
                    <div class="avatar-wrap online">
                                                                <div class="avatar" style="max-height: 150px;">
                                                                    <img src="../'.$row['Afile2'].'" style="height: 100%;" alt="'.$row['Firstname'].'" />
                                                                </div>
                                                            </div>
                </a>
            </div>';
        }
        ?>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="student-section">Student Section</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Add New Item</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                          <li><a  href="activate-courses">Activate Courses</a></li>
                          <li><a  href="add-new-blog-post">Add New Blogpost</a></li>
                          <li><a  href="choose-test">Start Test</a></li>
                          <li><a  href="pay-balances">Pay Balances</a></li>
                          <li><a  href="submit-assignment">Submit Assignment</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>View Items</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                          <li><a  href="view-student-account">My <?php
echo $firstname;
?> Account</a></li>
                          <li><a  href="view-attendance">My Lecture Attendance</a></li>
                          <li><a  href="view-active-courses">Active Courses</a></li>
                          <li><a  href="view-results">Results</a></li>
                          <li><a  href="view-all-balances">All Balances</a></li>
                          <li><a  href="view-all-blogposts">All Blogposts</a></li>
                          <li><a  href="view-all-courses">All Courses</a></li>
                          <li><a  href="view-messages">All New Messages</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>









        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <?php 
          
          include('db.php');


              
            
                    


                $count = "SELECT count(*) FROM blogcomments WHERE Status='Unread'";
                $database_count = mysql_query($count);{
                $DuetiesDesc = array();
                $database_count=mysql_fetch_assoc($database_count);



                  
                
                 
                      echo '
                                    <div class="noti__item js-item-menu">';
                                        echo '<i class="zmdi zmdi-comment-more"></i>';
                                        echo '<span class="quantity">'.$database_count['count(*)'].'</span>';
                                        echo '<div class="mess-dropdown js-dropdown">';
                                            echo '<div class="mess__title">';
                                                echo '<p>You have '.$database_count['count(*)'].' new blog comments</p>';
                                            echo '</div>';
                                       
                }


                function excerpt($content,$numberOfWords = 10){     
                    $contentWords = substr_count($content," ") + 1;
                    $words = explode(" ",$content,($numberOfWords+1));
                    if( $contentWords > $numberOfWords ){
                        $words[count($words) - 1] = '....';
                    }
                    $excerpt = join(" ",$words);
                    return $excerpt;
                }



                $result = mysql_query("SELECT * FROM blogcomments WHERE Status='Unread' ORDER BY CommentID DESC LIMIT 3");
                while($row = mysql_fetch_array($result))
                {
                
                                            echo '<div class="mess__item">';
                                                echo '<div class="image img-cir img-40">
                                                    <img src="../images/icons/gog1.png" alt="'.$row['Name'].'" />';
                                                echo '</div>';
                                                echo '<div class="content">';
                                                    echo '<h6>'.$row['Name'].'</h6>';
                                                    echo '<p>'.$row['Email'].'</p>';
                                                    echo '<p>'.$row['Subject'].'</p>';
                                                    echo '<span class="time">'.$row['Dateposted'].'</span>';
                                                echo '</div>';
                                            echo '</div>';
                                             }
                                            echo '<div class="mess__footer">';
                                                echo '<a href="">View all Blog Comments</a>';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';

                                   

               

              

              ?> 






              <?php 
          
          include('db.php');


              
            
                    


                $count = "SELECT count(*) FROM contactus WHERE Status='Unread' AND Recipient='$brandname'";
                $database_count = mysql_query($count);{
                $DuetiesDesc = array();
                $database_count=mysql_fetch_assoc($database_count);
                 
                      echo '
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">'.$database_count['count(*)'].'</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have '.$database_count['count(*)'].' New Contact us messages</p>
                                            </div>';

                                        }

                                        

                  
                function excerpta($content,$numberOfWords = 10){     
                    $contentWords = substr_count($content," ") + 1;
                    $words = explode(" ",$content,($numberOfWords+1));
                    if( $contentWords > $numberOfWords ){
                        $words[count($words) - 1] = '....';
                    }
                    $excerpta = join(" ",$words);
                    return $excerpta;
                }

                $result = mysql_query("SELECT * FROM contactus WHERE Status='Unread' AND Recipient='$firstname' ORDER BY ContactusID DESC LIMIT 3");
                while($row = mysql_fetch_array($result))
                {
                                            echo '<div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="../'.$row['Attachedfilee'].'" alt="'.$row['Name'].'" />
                                                </div>
                                                <div class="content">
                                                    <p>'.$row['Name'].'</p>
                                                    <p>'.$row['Email'].'</p>
                                                    <p>'.excerpta($row['Message'], 4).'</p>
                                                </div>
                                            </div>';
                                            }
                                            echo '<div class="email__footer">
                                                <a href="contact-us-status-unread.php">See all Contact us messages</a>
                                            </div>
                                        </div>
                                    </div>';

                                

                                    ?>


                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">5</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 5 Notifications</p>
                                            </div>


                                            <?php 
          
          include('db.php');


              
            
                    


                $count = "SELECT count(*) FROM servicesorders WHERE Paymenttype='OnDelivery' AND Status='Unread'";
                $database_count = mysql_query($count);{
                $DuetiesDesc = array();
                $database_count=mysql_fetch_assoc($database_count);
                 
                      echo '
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got '.$database_count['count(*)'].' Services Orders (on delivery) notification</p>

                                                    <span class="date zmdi zmdi-notifications" style="color: #fa4251;"> ('.$database_count['count(*)'].') </span>
                                                    <span><a href="#"> view all </a></span>
                                                </div>
                                            </div>';
                                        }
                                            ?>





                                            <?php 
          
          include('db.php');


              
            
                    


                $count = "SELECT count(*) FROM servicesorders WHERE Paymenttype='ByTransfer' AND Status='Unread'";
                $database_count = mysql_query($count);{
                $DuetiesDesc = array();
                $database_count=mysql_fetch_assoc($database_count);
                 
                      echo '
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got '.$database_count['count(*)'].' Services Orders (by transfer) notification</p>
                                                    <span class="date zmdi zmdi-notifications" style="color: #fa4251;"> ('.$database_count['count(*)'].') </span>
                                                    <span><a href="#"> view all </a></span>
                                                </div>
                                            </div>';

                                        }
                                        ?>




                                        <?php 
          
          include('db.php');


              
            
                    


                $count = "SELECT count(*) FROM cartorders WHERE Paymenttype='ByTransfer' AND Status='Unread'";
                $database_count = mysql_query($count);{
                $DuetiesDesc = array();
                $database_count=mysql_fetch_assoc($database_count);
                 
                      echo '
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got '.$database_count['count(*)'].' Cart Orders (by transfer) notification</p>
                                                    <span class="date zmdi zmdi-notifications" style="color: #fa4251;"> ('.$database_count['count(*)'].') </span>
                                                    <span><a href="#"> view all </a></span>
                                                </div>
                                            </div>';

                                        }
                                        ?>




                                        <?php 
          
          include('db.php');


              
            
                    


                $count = "SELECT count(*) FROM cartorders WHERE Paymenttype='OnDelivery' AND Status='Unread'";
                $database_count = mysql_query($count);{
                $DuetiesDesc = array();
                $database_count=mysql_fetch_assoc($database_count);
                 
                      echo '
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got '.$database_count['count(*)'].' Cart Orders (on delivery) notification</p>
                                                    <span class="date zmdi zmdi-notifications" style="color: #fa4251;"> ('.$database_count['count(*)'].') </span>
                                                    <span><a href="#"> view all </a></span>
                                                </div>
                                            </div>';
                                        }
                                        ?>



                                        <?php 
          
          include('db.php');


              
            
                    


                $count = "SELECT count(*) FROM laundryorders WHERE Status='Unread'";
                $database_count = mysql_query($count);{
                $DuetiesDesc = array();
                $database_count=mysql_fetch_assoc($database_count);
                 
                      echo '
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got '.$database_count['count(*)'].' Laundry Orders notification</p>
                                                    <span class="date zmdi zmdi-notifications" style="color: #fa4251;"> ('.$database_count['count(*)'].') </span>
                                                    <span><a href="#"> view all </a></span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>';

                                            }

                                            ?>


                                        </div>
                                    </div>
                                </div>

                                <?php
                include('db.php');

                  



                $result = mysql_query("SELECT * FROM students WHERE StudentID=$student_id");
                while($row = mysql_fetch_array($result))
                {
                
                                echo '<div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image" style="padding-right: 50px;">
                                            <div class="avatar-wrap online">
                                                                <div class="avatar" style="max-height: 150px;">
                                                                    <img src="../'.$row['Afile2'].'" style="height: 100%;" alt="'.$row['Firstname'].'" />
                                                                </div>
                                                            </div>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">'.$row['Firstname'].'</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <div class="avatar-wrap online">
                                                                <div class="avatar" style="max-height: 150px;">
                                                                    <img src="../'.$row['Afile2'].'" style="height: 100%;" alt="'.$row['Firstname'].'" />
                                                                </div>
                                                            </div>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">'.$row['Firstname'].'</a>
                                                    </h5>
                                                    <span class="email">'.$row['Username'].'</span>
                                                </div>
                                            </div>
                                            <div class="ac