<?php
session_start();
    $con=mysqli_connect("localhost","root","","rsams_db")or die("Database Server Error");

    $sql="SELECT * FROM `tbl_registration`";
    $run=mysqli_query($con,$sql);
    
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
    $query = "SELECT * FROM tbl_registration where role='user' LIMIT " . $page_first_result . ',' . $results_per_page;  
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
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
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
  .abc
    {
        position: relative;
        right: 50px;
    }
  .pqr
    {
        position: relative;
        right: 26px;   
    }
  .xyz
    {
        position: relative;
        right: 30px;
    }
  .jpg
    {
        position: relative;
        right: 15px;
    }
  .vish
    {
       position: relative;
       left: 10px;
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
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                            <h3 style="position:relative; color:#06A3DA; font-family:centuary;">Shooters Payment</h3>

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
        <div class="product-status mg-b-15" style="position:relative; top:-20px;height: 500px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap" >
                            <div class="asset-inner">
                              <center>
                                <table >
                                    <tr class="attribute">
                                        <th style="color:#06A3DA;">No</th>
                                        <th style="color:#06A3DA; position:relative; left:25px;">Image</th>
                                        <th style="color:#06A3DA; position:relative; left:2px;">Name</th>
                                        <th style="color:#06A3DA; position:relative; left:20px;">Amount</th>
                                        <th style="color:#06A3DA; position:relative; left:50px;">Email ID</th>
                                        <th style="color:#06A3DA; position:relative; right:40px;">Status</th>
                                        <th style="color:#06A3DA; position:relative; right:30px;">Phone No</th>
                                        <th style="color:#06A3DA; position:relative; right:30px;">Date</th>
                                        <th style="color:#06A3DA; position:relative;right:40px;">Action</th>
                                    </tr>

                                    <!-- status=Shooters_Detalis -->

<?php 
    $sql2="SELECT * FROM `tbl_paymant`";
    $qry2=mysqli_query($con,$sql2);
    while ($row=mysqli_fetch_assoc($run) and $row2=mysqli_fetch_assoc($qry2)) 
    {
        $id=$row['id'];
        $uurl="delete-payment_history.php?id=".$id;

                                  echo'<tr>
                                        <td>'.$row['id'].'</td>
                                        <td class="vish"><img src="../Registration/'.$row['photo'].'" alt="" /></td>
                                        <td>'.$row['username'].'</td>
                                        <td class="vp">'.$row['fees'].'</td>
                                        <td class="vp">'.$row['email'].'</td>
                                        <td class="vp" style="position:relative; left:-40px;">'.$row2['status'].'</td>
                                        <td class="vp" style="position:relative; left:-40px;">'.$row['phone_no'].'</td>
                                        <td class="vp" style="position:relative; left:-40px;">'.$row['post_date'].'</td>
                                        
                                        <td class="vp">
                                        <a href="payment_view/payment_recipt.php?gmail='.$row['email'].'"><button style="position:relative;background: #06a3da;color:#fff;border-radius:7px;padding:5px;right:70px;border:2px solid #fff;width:60px;">View</button>
                                        </a>
                                        <a href="payment_view/payment_recipt.php?gmail='.$row['email'].'" download><button style="position:relative;background: #06a3da;color:#fff;border-radius:7px;padding:5px;right:70px;border:2px solid #fff;width:80px;" >Download</button>
                                        </a>
                                        
                                        <a onclick="delete_rec('."'$uurl'".')" >
                                        <button style="position:relative;background: #06a3da;color:#fff;border-radius:7px;padding:5px;right:70px;border:2px solid #fff;width:80px;" >Delete</button>
                                        </a>
                                       

                                        </td>
                                    </tr>';
    }
?> 
                                </table>
                                </center>
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
                              <li class="page-item"><a class="page-link" href="payment_history.php?page='.$less.'">Previous</a></li>
        ';  

}
    
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '

                                   <li class="page-item"><a class="page-link" href="payment_history.php?page=' . $page . '">' . $page . '</a></li>

        ';  
    } 



    if ($_GET['page']<$number_of_page) {
    // code...
$less=$_GET['page']+1;

            echo '

<li class="page-item"><a class="page-link" href="payment_history.php?page='.$less.'">Next</a></li>

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
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright All rights reserved. Template by vishakha And Parmar</p>
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
