<?php
    session_start();
    $con=mysqli_connect("localhost","root","","rsams_db")or die("Database Server Error");

    $results_per_page =4;  
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
    $query = "SELECT * FROM tbl_registration  where role='user' LIMIT " . $page_first_result . ',' . $results_per_page;  
    $run_13 = mysqli_query($con, $query);  

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
        .img-circle
        {
            position: relative;
            left: 40px;
            width: 100px;
            height: 100px;
        }
        .contact-stat
        {
            position: relative;
            left: 0px;
        }
        .panel-footer 
        {
            position: relative;
            border: 2px solid #06A3DA;
            border-radius: 10px;
        }
        .all-pro-ad
        {
            position: relative;
            left: 0px;
        }
        .name
        {
            position: relative;
            left: 0px;
            color: #06A3DA;
        }
         .footer-copyright-area 
        {
            position: sticky;
            bottom: -10px;
            background: #06A3DA;
            padding: 20px 0px;
            text-align: center;
        }
        .custom-pagination
        {
            position: relative;
            left: -12px;
        }
         body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
    
    .swal-modal {
  font-family: sans-serif;
}

.swal-text {
  text-align: center;
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
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <h3 style="position:relative; color:#06A3DA; font-family:centuary;">All Shooters</h3>
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
            .brd{
                border-radius: 30px;
                border: 3px solid #06A3DA;
            }
        </style>
        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
     
<?php
    
    while ($row=mysqli_fetch_assoc($run_13)) 
    {
        $d_dob=$row['dob'];
        $dateOfBirth = $d_dob;
 
        // Get today's date
        $now = date("Y-m-d");
 
        // Calculate the time difference between the two dates
        $diff = date_diff(date_create($dateOfBirth), date_create($now));
 
        // Get the age in years, months and days
        $age_user=$diff->format('%y');
        //echo "your current age is ".$diff->format('%y')." Years ".$diff->format('%m')." months ".$diff->format('%d')." days";
        $id=$row['id'];
        $uurl="delete-all_shooters.php?id=".$id;

                    echo '<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" >
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30 brd" >
                            <div class="panel-body custom-panel-jw">
                                
                                
                                <img src="../../../RSMS_Project/Registration/'.$row['photo'].'" alt=""  style="position:relative;height:50%;width:50%; left:65px;"/>
                                
                                <div>
                                <a onclick="delete_rec('."'$uurl'".')" >
                                <i class=" uill uil uil-trash-alt icon" style="position:relative;top:20px; font-size:35px; left:240px; color:#06A3DA;"></i></a>
                                
                                 <h3 style="position:relative;top:-30px;width:50px;">'.$row['username'].'</h3>

                                 <p style="position:relative;top:-25px;">'.$row['address'].'</p>
                                </div>

                                 <p style="position:relative;top:-20px;">
                                    '.$row['username'].' ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                                </p>
                            </div>
                            <div class="panel-footer contact-footer" style="position:relative;top:-10px;">
                                <div class="professor-stds-int" >
                                    <div class="professor-stds">
                                       
                                       <div class="contact-stat"><strong>Gun:</strong> <span>'.$row['gun_selection'].'</span></div>

                                    </div>
                                    
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Hand_Selection:</strong> <span>'.$row['hand_selection'].'</span></div>
                                    </div>
&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Age:</strong><span> '.$age_user.'</span></div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>';
    }
?>
<!--                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30 brd">
                            <div class="panel-body custom-panel-jw">
                                
                                <img alt="logo" class="img-circle m-b" src="img/contact/2.jpg">
                                <h3 class="name"><a href="">Amir dex</a></h3>
                                <p class="all-pro-ad">Pakistan, Los</p>
                                <p>
                                    Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                                </p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                   <div class="professor-stds">
                                        <div class="contact-stat"><strong>Gun:</strong> <span>Pistol</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Hand_Selection:</strong> <span>Lefty</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Age:</strong>  <span>18</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30 brd">
                            <div class="panel-body custom-panel-jw">
                                
                                <img alt="logo" class="img-circle m-b" src="img/contact/3.jpg">
                                <h3 class="name"><a href="">Alva Adition</a></h3>
                                <p class="all-pro-ad">India, Col</p>
                                <p>
                                    Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                                </p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Gun:</strong> <span>Pistol</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Hand_Selection:</strong> <span>Lefty</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Age:</strong>  <span>18</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs res-tablet-mg-t-30 dk-res-t-pro-30 brd">
                            <div class="panel-body custom-panel-jw">
                                
                                <img alt="logo" class="img-circle m-b" src="img/contact/4.jpg">
                                <h3 class="name"><a href="">Sex Dog</a></h3>
                                <p class="all-pro-ad">Uk, LA</p>
                                <p>
                                    Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                                </p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Gun:</strong> <span>Pistol</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Hand_Selection:</strong> <span>Lefty</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Age:</strong>  <span>18</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
               <!--  <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30 brd">
                            <div class="panel-body custom-panel-jw">
                                
                                <img alt="logo" class="img-circle m-b" src="img/contact/1.jpg">
                                <h3 class="name"><a href="">Fox Well</a></h3>
                                <p class="all-pro-ad">California, LA</p>
                                <p>
                                    Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                                </p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                  <div class="professor-stds">
                                        <div class="contact-stat"><strong>Gun:</strong> <span>Pistol</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Hand_Selection:</strong> <span>Lefty</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Age:</strong>  <span>18</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30 brd">
                            <div class="panel-body custom-panel-jw">
                                
                                <img alt="logo" class="img-circle m-b" src="img/contact/3.jpg">
                                <h3 class="name"><a href="">Drom Simson</a></h3>
                                <p class="all-pro-ad">Austrolia, LA</p>
                                <p>
                                    Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                                </p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Gun:</strong> <span>Pistol</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Hand_Selection:</strong> <span>Lefty</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Age:</strong>  <span>18</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30 brd">
                            <div class="panel-body custom-panel-jw">
                                
                                <img alt="logo" class="img-circle m-b" src="img/contact/2.jpg">
                                <h3 class="name"><a href="">Sima son</a></h3>
                                <p class="all-pro-ad">Suiden, Cro</p>
                                <p>
                                    Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                                </p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Gun:</strong> <span>Pistol</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Hand_Selection:</strong> <span>Lefty</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Age:</strong>  <span>18</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30 brd">
                            <div class="panel-body custom-panel-jw">
                               
                                <img alt="logo" class="img-circle m-b" src="img/contact/4.jpg">
                                <h3 class="name"><a href="">Drama Son</a></h3>
                                <p class="all-pro-ad">USA, LA</p>
                                <p>
                                    Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                                </p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                   <div class="professor-stds">
                                        <div class="contact-stat"><strong>Gun:</strong> <span>Pistol</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Hand_Selection:</strong> <span>Lefty</span></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><strong>Age:</strong>  <span>18</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
                            <center>
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
                              <li class="page-item"><a class="page-link" href="All_shooturs.php?page='.$less.'">Previous</a></li>
        ';  

}
    
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '

                                   <li class="page-item"><a class="page-link" href="All_shooturs.php?page=' . $page . '">' . $page . '</a></li>

        ';  
    } 



    if ($_GET['page']<$number_of_page) {
    // code...
$less=$_GET['page']+1;

            echo '

<li class="page-item"><a class="page-link" href="All_shooturs.php?page='.$less.'">Next</a></li>

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
                            <p>Copyright © 2023. All rights reserved by Hetal and Vishakha Parmar<a href="https://colorlib.com/wp/templates/"></a></p>
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
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script><script>
    
function delete_rec(url){

    Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
    //alert below set url using java script and stoped alert
    //alert("oky");
    window.location.href=url;

  }
});

}
  </script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js'></script>

<?php   



if ($_SESSION['alert']==1) {
    // code...

    echo '

  <script >
    
    swal({
  title: "'.$_SESSION['alert_title'].'",
  text:
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua",
  icon: "success",
  buttons: {

    confirm: "Okay"
  },
  closeOnClickOutside: false
});
  </script>


    ';
    $_SESSION['alert']=0;
}


?>
