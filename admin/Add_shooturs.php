<?php
    session_start();
    $con=mysqli_connect("localhost","root","","rsams_db")or die("Database Server Error");

    $results_per_page = 4;  
    $query = "SELECT * FROM `tbl_registration` where role='user';";  
    $result = mysqli_query($con, $query);  
    $number_of_result = mysqli_num_rows($result);  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    } 
    $page_first_result = ($page-1) * $results_per_page;
    $query = "SELECT * FROM tbl_registration LIMIT " . $page_first_result . ',' . $results_per_page;  
    $run = mysqli_query($con, $query);   
    
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
    <style type="text/css">
    
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
 
        
        .footer-copyright-area {
    position: sticky;
    bottom: 0;
    background: #06A3DA;
    padding: 20px 0px;
    text-align: center;
}
.product-payment-inner-st {
    height: 70vh;
    padding: 20px;
    background: #fff;
}
.product-status-wrap{
    height: 82vh;
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
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <h3 style="position:relative; color:#06A3DA; font-family:centuary;">Requested Shooters List</h3>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .image
            {
                position: relative;
                border-radius: 50px;
            }
            .pagination
            {
                position: relative;
                left: 430px;
            }
        </style>
        <div class="product-status mg-b-15" style="position:relative; top: -20px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <!-- <div class="add-product">
                                <a href="#">Add Library</a>
                            </div> -->
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th style="color: #06A3DA;">No</th>
                                        <th style="color: #06A3DA; left: 12px; position:relative;">Image</th>
                                        <th style="color: #06A3DA;">Name</th>
                                        <!-- <th>Status</th> -->
                                        <th  style="color: #06A3DA;">Hand_Selection</th>
                                        <th  style="color: #06A3DA;">Email ID</th>
                                        <th  style="color: #06A3DA; position: relative; right: 40px;">Gender</th>
                                        <th  style="color: #06A3DA; left: 8px; position:relative;">Phone No</th>
                                        <th  style="color: #06A3DA;">Setting</th>
                                    </tr>
<?php 

    while ($row=mysqli_fetch_assoc($run)) 
    {
        $id=$row['id'];
                                    echo'<tr>
                                        <td>'.$row['id'].'</td>
                                        <td><img src="../Registration/'.$row['photo'].'" alt="" /></td>
                                        <td>'.$row['username'].'</td>
                                        <!-- <td>
                                            <button class="pd-setting">Active</button>
                                        </td> -->

                                        <td class="abc" style="position:relative; left:25px;">'.$row['hand_selection'].'</td>
                                        <td class="abc" style="position:relative; right:23px;">'.$row['email'].'</td>
                                        <td class="abc" style="position:relative; right:40px;">'.$row['gender'].'</td>
                                        <td class="abc">'.$row['phone_no'].'</td>
                                        <td>


                                             <input type="checkbox" onclick="act('.$row['id'].')" value="1" class="switch">
                                       
                                        </td>


                                    </tr>';
    }
?>


<script type="text/javascript">
    

    function act(url){
window.location.href="act.php?id="+url+"&page=add_shooter";
        //alert("hy");
    }
</script>
                                </table>
                            </div>
                           <center>
                            <div class="custom-pagination" style="position:relative; top:10px; margin-right:880px;">
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
                              <li class="page-item"><a class="page-link" href="Add_shooturs.php?page='.$less.'">Previous</a></li>
        ';  

}
    
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '

                                   <li class="page-item"><a class="page-link" href="Add_shooturs.php?page=' . $page . '">' . $page . '</a></li>

        ';  
    } 



    if ($_GET['page']<$number_of_page) {
    // code...
$less=$_GET['page']+1;

            echo '

<li class="page-item"><a class="page-link" href="Add_shooturs.php?page='.$less.'">Next</a></li>

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
                 <!-- footer start -->
           <div class="footer-copyright-area" style="position: sticky;bottom: 0px;width: 100%;">
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
        <!-- footer end -->
    

        

    

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