<?php 
session_start();
    $con=mysqli_connect("localhost","root","","rsams_db")or die("Database Server Error");

    $results_per_page = 4;  
    $query_12 = "SELECT * FROM `tbl_registration` where role='user' and status=0";  
    $result = mysqli_query($con, $query_12);  
    $number_of_result = mysqli_num_rows($result);  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
    if (!isset ($_GET['page']) ) 
    {  
        $page = 1;  
    } 
    else 
    {  
        $page = $_GET['page'];  
    } 
    $page_first_result = ($page-1) * $results_per_page;
    $query_12 = "SELECT * FROM tbl_registration where role='user' and status=0 LIMIT " . $page_first_result . ',' . $results_per_page ;  
    $run_12 = mysqli_query($con, $query_12);  

?>
<!doctype html>
<html class="no-js" lang="zxx">

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
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
     <link href="abc.jpg" rel="icon">
     
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">
        
    .footer-copyright-area {
    position: sticky;
    bottom: 0;
    background: #06A3DA;
    padding: 20px 0px;
    text-align: center;
}
    
    
input.switch {
     position: relative;
     appearance: none;
     -moz-appearance: none;
     -webkit-appearance: none;
     width: 35px !important;
     height: 20px;
     border-radius: 30px;
     cursor: pointer;
     background: #ccc;
     transition: box-shadow 0.3s ease-in-out, padding 0.25s ease-in-out;
     transition-delay: 0.1s, 0s;
}
 input.switch:focus {
     border: 0;
     outline: 0;
}
 input.switch:checked {
     transition-delay: 0s, 0s;
     box-shadow: inset 0 0 0 2.62857em #06A3DA !important;
     padding-left: 15px;
}
 input.switch:before {
     display: inline-block;
     height: 14px;
     width: 14px;
     margin: 3px;
     background-color: #fff;
     border-radius: 2.1em;
     transition: all 0.1s ease 0.1s;
}
 input.switch:before, input.switch:after {
     content: "";
     display: block;
}
 input.switch:active::before {
     transition: all 0.1s ease 0.05s;
}
        .custom-pagination
        {
            width: max-content;
            position: relative;
            left: 90px;
        }
</style>

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
   <?php
        include("code_part/sidebar.php");
   ?>
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

        <!-- Header Start -->

            <?php

                include("code_part/header.php");

            ?>

        <!-- Header End -->
        
            <!-- Mobile Menu start -->

            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu" style="position:relative; left:650px; top: -5px;">
                                            <h3 style="position:relative; color:#06A3DA; font-family:centuary; top: 7px;">All Shooters</h3>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts-area mg-b-15" style="position:relative; top: -20px;">
            <div class="container-fluid">
                <div class="row">
                    


<?php 

    while ($row=mysqli_fetch_assoc($run_12)) 
    {
        $d_dob=$row['dob'];
        $dateOfBirth = $d_dob;
 
        // Get today's date
        $now = date("Y-m-d");
 
        // Calculate the time difference between the two dates
        $diff = date_diff(date_create($dateOfBirth), date_create($now));
 
        // Get the age in years, months and days
        $age_uer=$diff->format('%y');
        //echo "your current age is ".$diff->format('%y')." Years ".$diff->format('%m')." months ".$diff->format('%d')." days";



        echo '<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-bottom:5px;">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="../../RSMS_Project/Registration/'.$row['photo'].'" alt="" />
                                
                            </div>
                            <div class="student-dtl">
                                <style type="text/css">
                                    table{
                                        background: ;
                                        width: 100%;
                                    }
                                    table>tr,td{
                                        text-align: right;
                                        width: 900vw;
                                        background: ;
                                    }
                                </style>
                                <table>
                                    <tr>
                                        <td style=" text-align: left;">
                                            <h2>'.$row['username'].'</h2>            
                                        </td>
                                        <td>
                                            
                                            <input type="checkbox" onclick="act('.$row['id'].')" value="1" class="switch" style="position:relative;left:-20px;">
                                        </td>
                                    </tr>
                                </table>
                                 
                                <div style="position: relative;left: -41%;">

                                
                                <p class="dp-ag"><b>Age:</b> '.$age_uer.'</p>
                                </div>
                            </div>
                        </div><br>
                    </div>


                    ';

    }
 ?>
                    

                </div >
                </div>
            </div>
        </div>

<script type="text/javascript">
    

    function act(url){
            window.location.href="act.php?id="+url+"&page=index";
        //alert("hy");
    }
</script>
         <center>
                <div class="custom-pagination" style="">
                                <ul class="pagination">
                                    <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li> -->

    <?php

        if ($_GET['page']>1) {
    // code...
$less=$_GET['page']-1;

            echo '
                              <li class="page-item"><a class="page-link" href="index.php?page='.$less.'">Previous</a></li>
        ';  

}
    
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '

                                   <li class="page-item"><a class="page-link" href="index.php?page=' . $page . '">' . $page . '</a></li>

        ';  
    } 



    if ($_GET['page']<$number_of_page) {
    // code...
$less=$_GET['page']+1;

            echo '

<li class="page-item"><a class="page-link" href="index.php?page='.$less.'">Next</a></li>

        ';  

}

    ?>

                                </ul>
                            </div>
                            </center>
                            <br>    

        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2023. All rights reserved by Hetal and Vishakha Parmar</p>
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
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
</body>

</html>