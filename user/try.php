<!doctype html>
<html class="no-js" lang="en">
<?php 
include("code_part/connection.php");
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Payment History</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
    .footer-copyright-area {
    position: sticky;
    bottom: 0;
    background: #06A3DA;
    padding: 20px 0px;
    text-align: center;
}
 .custom-pagination
        {
            position: relative;
            left: 450px;
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
    <div class="all-content-wrapper" >
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <div class="logo-pro">
                        <a href="dashboard.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
            <div class="breadcome-area" >
                <div class="container-fluid" >
                    <div class="row" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<!--                                         <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div> -->
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <h3 style="position:relative; color:#06A3DA; font-family:centuary;">Payment History</h3>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
        </style>

        
        <div class="product-status mg-b-15" style="position:relative; top:-20px;height: 80vh;" >
            <div class="container-fluid" >
                <div class="row" >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                        <div class="product-status-wrap" style="height:98vh;">
                            <div class="asset-inner">
                                <table style="">
                                    <tr class="attribute">
                                        <th style="color:#06A3DA;">No</th>
                                        <th style="color:#06A3DA; position:relative; left:10px;">Image</th>
                                        <th style="color:#06A3DA; position:relative; left:25px;">Name</th>
                                        <th style="color:#06A3DA; position:relative; right:20px;">Fees</th>
                                        <th style="color:#06A3DA; position:relative; right:3px;">Amount</th>
                                        <th style="color:#06A3DA; position:relative; right:1px;">Setting</th>
                                    </tr>

                        <style type="text/css">
                            .abc{
                                position: relative;
                                right: 50px;
                            }
                            .fees
                            {
                                position: relative;
                                left: -20px;
                            }
                            .pqr{
                                 position: relative;
                                 left: 6px;   
                            }
                            .xyz{
                                position: relative;
                                right: 30px;
                            }
                            .jpg{
                                position: relative;
                                right: 15px;
                            }
                        </style>

                                 <?php 





    $results_per_page = 5;  
    $query = "SELECT * FROM `tbl_paymant`;";  
    $result = mysqli_query($con, $query);  
    $number_of_result = mysqli_num_rows($result);  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    } 
    $page_first_result = ($page-1) * $results_per_page;
    $query = "SELECT * FROM tbl_paymant LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = mysqli_query($con, $query); 




// $sql="SELECT `id`, `name`, `fees`, `photos` FROM `tbl_paymant`";
// $qry=mysqli_query($con,$sql);


while ($row=mysqli_fetch_assoc($result)) {
    echo '<tr>
                                        <td>1</td>
                                        <td><img src="img/product/'.$row['photos'].'" alt="" /></td>
                                        <td>'.$row['name'].'</td>
                                        <td class="fees">'.$row['fees'].'</td>
                                        <td class="pqr">5000</td>
                                        <td class="jpg">
                                          <a href="#">
                                            <i class="uil uil-arrow-circle-down" aria-hidden="true" style=" font-size:45px;color: #06A3DA;"></i>
                                        </a>
                                        </td>
                                    </tr>
    ';
}
                                  ?>  
                              </table>
                            </div>

                            <center>
                            <div class="custom-pagination" style="position:relative; top:10px; margin-right:880px;">
                                <ul class="pagination">
                                    

<?php 

if ($_GET['page']>1) {
    // code...
$less=$_GET['page']-1;

            echo '
<li class="page-item"><a class="page-link active" href="payment_history.php?status=Payment_History&page=' . $less . '">Previous</a></li>
        ';  

}
    
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '
<li class="page-item"><a class="page-link active" href="payment_history.php?status=Payment_History&page=' . $page . '">' . $page . '</a></li>
        ';  
    } 



    if ($_GET['page']<$number_of_page) {
    // code...
$less=$_GET['page']+1;

            echo '
<li class="page-item"><a class="page-link active" href="payment_history.php?status=Payment_History&page=' . $less . '">Next</a></li>
        ';  

}

     ?> 





                                </ul>
                            </div>
                            </center>
                            <br>    
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-copyright-area" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by vishakha And Parmar <a href="https://colorlib.com/wp/templates/"></a></p>
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
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->

</body>

</html>