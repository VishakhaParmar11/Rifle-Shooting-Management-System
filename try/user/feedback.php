<?php
    
    include ("code_part/connection.php");
    $sql="SELECT * FROM `tbl_feedback`";
    $qry=mysqli_query($con,$sql);

    $results_per_page = 6;  
    $query = "SELECT * FROM `tbl_feedback`;";  
    $result = mysqli_query($con, $query);  
    $number_of_result = mysqli_num_rows($result);  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    } 
    $page_first_result = ($page-1) * $results_per_page;
    $query = "SELECT * FROM tbl_feedback LIMIT " . $page_first_result . ',' . $results_per_page;  
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
    
/*input.switch {
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
}*/

        .card_div{
            height: 170px;
            width: 330px;
            border: 1px solid #fff;
            background: whitesmoke;
            border-radius: 20px;
            position: relative;
            top: 40px;
            left: 50px;
        }
        .user_div{
            height: 50px;
            width: 100%;
/*          background: red;*/
            display: flex;

        }
        .user_name{

            height: 50px;
            width: 230px;
            background: #06A3DA;
            border-radius: 0px 15px 0px 15px;
            border-top-right-radius:20px;
            position: relative;
            left: 35px;
            border: 1px solid #06A3DA;
        }
        .user_name>span{
            position: relative;
            top: 6px;
            left: 10px;
            font-size: 15px;
            color: #fff;
        }
        .user_div>img{
            width: 65px;
            height: 65px;
            border-radius: 40px;
            border: 1px solid;
            bottom: 25px;
            left: 10px;
            border: 4px solid #06A3DA;
            position: relative;
            background: whitesmoke;
        }
        .abc{
            
            height: 95px;
            width: 100%;
            position: relative;
            top: 15px;
            left: 0px;
            overflow-x: hidden;
            overflow-y: auto;
            scroll-behavior: auto;
        }
        .star{
            position: relative;
            left: 30px;
            top:8px;
            color: #FEA116;
        }
        .main_card{
            
            width:400px;
        }
        .footer-copyright-area 
        {
            position: sticky;
            bottom: -10px;
            background: #06A3DA;
            padding: 20px 0px;
            text-align: center;
        }
        .all-content-wrapper {
             height: 0;
             margin-left: 200px;
             transition: all 0.3s;
}


    
input.switch {
     position: relative;
     appearance: none;
     -moz-appearance: none;
     -webkit-appearance: none;
     width: 40px !important;
     height: 20px;
     border-radius: 30px;
     cursor: pointer;
     background: #ccc;
     transition: box-shadow 0.3s ease-in-out, padding 0.25s ease-in-out;
     transition-delay: 0.1s, 0s;
     left: 100px;
     top: 2px;
}
 input.switch:focus {
     border: 0;
     outline: 0;
}
 input.switch:checked {
     transition-delay: 0s, 0s;
     box-shadow: inset 0 0 0 2.62857em lightblue; !important;
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
.icon1
{
    position: relative;
    color: #fff;
    left: 100px;
    font-size: 30px;
}
.image
            {
                position: relative;
                border-radius: 50px;
            }
            .pagination
            {
                position: relative;
                left: 550px;
            }
            .pd-setting-ed{
                position: relative;
                right: 55px;
            }
            .pqr{
                position: relative;
                left: 40px;
            }
             .name
            {
                position: relative;
                top: -30px;
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
                                          <h3 style="position:relative;font-family: century; color: #06a3da;">Shooters FeedBack</h3>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
        <div class="notification-area mg-b-15">
            <div class="container-fluid">
             
                <div class="row">



<!-- div over -->
<?php
    
    include ("code_part/connection.php");
    $sql="SELECT * FROM `tbl_feedback`";
    $qry=mysqli_query($con,$sql);
?>



                    <?php

                    while($row=mysqli_fetch_assoc($run))
                    {

$ids=$row['user_id'];

    $sql1="SELECT * FROM `tbl_registration` WHERE id=$ids";
    $qry1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_assoc($qry1);




echo '
                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-10">
                    <div class="card_div" style="position:relative; left:40px; width: 380px;">
            <div class="user_div">
                <img src="'.$row['feed_photo'].'">
                <div class="user_name" style="position:relative;width: 274px;">
                    <span class="name" style="position:relative;top: -12px;">'.$row1['username'].'</span><input type="checkbox" value="1" class="switch" style="position:relative; left:160px;">&nbsp;<a href="delete_feedback.php?status=Feedback&id="'.$row['id'].' style="position:relative; left:60px;"><i class="uil uil-trash-alt icon1"></i></a>
                    <br>
                    <span class="date" style="position:relative;top: -15px;">'.$row['post_date'].'</span>
                </div>
            </div>
            <div class="star">
                <!-- Add icon library -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
            </div>
            <div class="abc">
                '.$row['feed_desc'].'
            </div>
        </div><br>
        <br>
    </div>';
}
?>

<!-- div over -->
    
</div>
        <center style="position: relative; left:-490px; top: 10px;">
                            <div class="custom-pagination">
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
                              <li class="page-item"><a class="page-link" href="feedback.php?page='.$less.'">Previous</a></li>
        ';  

}
    
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '

                                   <li class="page-item"><a class="page-link" href="feedback.php?page=' . $page . '">' . $page . '</a></li>

        ';  
    } 



    if ($_GET['page']<$number_of_page) {
    // code...
$less=$_GET['page']+1;

            echo '

<li class="page-item"><a class="page-link" href="feedback.php?page='.$less.'">Next</a></li>

        ';  

}

     ?>
                                </ul>
                            </div>
                            </center>


                </div>

                </div>
            </div>


</div>



         <!-- footer start -->
            <?php 
                include("code_part/footer.php");
             ?>
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