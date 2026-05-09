<?php 

    session_start();
    include ("code_part/connection.php");
 ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKS Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <?php 
        include("code_part/logo.php");
     ?>
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

    <style type="text/css">
        
        .xyz{
            position: relative;
            left: 0px;
            background: black;
            color: #fff;
            padding: 20px;
             
            
        }
        .name-col {
                  left: -25px;
        }
        .pqr{
            position: relative;
            left: 3px;
            color: #06A3DA;
            padding: 15px;
        }
            
       /* td{
                padding: 10px;
                left: 30px;
                position: relative;
        }*/
       .th{
            padding: 17px;
            background:black;
            color: #06A3DA;
            font-size: 14px;
            position: relative;
            left: 0px;
            }

    ::placeholder {
        color: #06A3DA;
        opacity: 1; /* Firefox */
    }

    #browser  {
        border: 1px solid #06A3DA;
        font-size: 14px;
        height: 40px;
        color: #06A3DA;
        padding-left: 20px;
        padding-right: 40px;
        background: rgba(255, 255, 255, 0.1);
        box-shadow: none;
        border-radius: 30px;
        width: 300px;
        position: relative;
        top: 20px;
    }

      .vh{
        position: relative;
        left: -120px;
        top: 30px;
        color: #06A3DA;
    }
    .vish{
        position: relative;
        top: 90px;
        left: 150px;
        padding: 10px;
        font-size: 17px;
        color: black;
    }
    .vp{
        border: 2px solid #eef9ff;
        height: 350px;
        width: 1050px;
        left: 90px;
        top: 50px;
        position: relative;
        border-radius: 30px;
        box-shadow: 0 4px 8px 0 grey, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .stu{
        border: 4px solid lightblue;
        position: relative;
        left:6px;
        box-shadow: 0 4px 8px 0 grey, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding-inline: !important 10px;

    }
    </style>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

        <?php
            include("code_part/sidebar.php");
        ?>


    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>

           
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <?php
            include("code_part/header.php");
        ?>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <!-- <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                           <h3 style="position:relative; color:#06A3DA; font-family:centuary;">Shooters Attendance</h3>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->

                <div class="single-pro-review-area mt-t-30 mg-b-15" style="width:1380px; top: -20px; position: relative;">
                    <div class="container-fluid">
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-payment-inner-st" style="position:relative; height:600px;">
                                     <ul id="myTabedu1" class="tab-review-design">

                                        <li class="active"><a  href="#reviews">Present Report</a></li>
                                    </ul>
                                         
                                                <div class="product-tab-list tab-pane fade active in" id="reviews">
                                                    <div class="row">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                             <div class="review-content-section">
                                                                 <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                         <div class="devit-card-custom">
                                                                            <form action="/action_page.php" method="get" class="sr-input-func">
<!--                                                                                 <div class="src"> 
                                                                                  <input list="browsers" placeholder="Search..." name="browser" id="browser" class="" style="position:relative; left:520px;">
                                                                                        <datalist id="browsers">
                                                                                            <option value="Paresh">
                                                                                            <option value="Kamlesh">
                                                                                            <option value="Rajesh">
                                                                                            <option value="Mahesh">
                                                                                            <option value="Suresh">
                                                                                        </datalist>
                                                                                        <input type="submit" id="btn" class="hide">
                                                                                        <a href="#"><i for="btn" class="fa fa-search " style="color: #06A3DA; position:relative; right: -10px; top: 23px; left:610px;"></i></a>
                                                                                </div> -->
                                                                            </form>

                                                                            <div class="vp">
                                                                                <table class="vh">
                                                                                    <thead>
                                                                                       





                                                                                        <tr class="vh">
                                                                                            <th style="position:relative; top: 25px; left:340px; font-size: 25px;">Name</th>
                                                                                            <th style="position:relative; top: 25px; left:430px; font-size: 25px;">Month</th>
                                                                                            <th style="position:relative; top: 25px; left:540px; font-size: 25px;">Present</th>
                                                                                            <th style="position:relative; top: 25px; left:640px; font-size: 25px;">Absent</th>
                                                                                            <th style="position:relative; top: 25px; left:740px; font-size: 25px;">Percentage</th>
                                                                                            <!-- <th style="position:relative; top: 25px; left:810px; font-size: 25px;">Report</th> -->
                                                                                        </tr>
                                                                                    </thead>
                                                                                <div>
                                                                                <tbody class="vish" style="position:relative; left:100px;">
                                                                                   

<?php

$gmail=$_SESSION['email'];
$id=$_SESSION['id'];
$name=$_SESSION['name'];
$sql="SELECT count(roll) FROM `tbl_attendance` where roll=$id and attend='present'";
    $qry=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($qry);
?>



<?php

    
//echo "<script>alert('hy');</script>";
    
        ?>


                                                                                    <tr>
                                                                                        <td style="position:relative; left:110px; top: 5px;">
                                                                                            
                                                                                            <?php echo $fech_row12['username']; ?>

                                                                                        </td>
                                                                                        <td style="position:relative; left:210px;top: 5px;">January</td>
                                                                                        <td style="position:relative; left:350px;top: 5px;">
                                                                                            

<?php 
$pre=$row[0];
echo $row[0];

 ?>

                                                                                        </td>
                                                                                        <td style="position:relative; left:450px;top: 5px;">
                                                                                            
<?php 
$sql="SELECT count(roll) FROM `tbl_attendance` where roll=$id and attend='absent'";
    $qry=mysqli_query($con,$sql);
    
    $row=mysqli_fetch_array($qry);
$ab=$row[0];
echo $row[0];

 ?>

                                                                                        </td>
                                                                                        <td style="position:relative; left:540px;top: 5px;">
                                                                                            
<?php 

echo $pre*27/100; echo " %";

 ?>


                                                                                        </td>
                                                                                        <!-- <td style="position:relative; left:610px;top: 5px;">
                                                                                        <button data-toggle="tooltip" title="Download" class="pd-setting-ed" style="position:relative; top:5px; border:1px solid black;"><i class="fa fa-download edudropnone" aria-hidden="true" style="color: #06A3DA;"></i></button>
                                                                                        </a>
                                                                                    </td> -->
                                                                                </tr>
                                                                                
                                                                                
                                                                            
                                                                            
                                                                    </tbody>
                                                                </div>
                                                            </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" placeholder="Facebook URL">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" placeholder="Twitter URL">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" placeholder="Google Plus">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control" placeholder="Linkedin URL">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright-area" style="position: sticky;bottom: 0;width: 100%;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2023. All rights reserved by Hetal and Vishakha Parmar <a href="https://colorlib.com/wp/templates/"></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <!-- <script src="js/tawk-chat.js"></script> -->
</body>

</html>