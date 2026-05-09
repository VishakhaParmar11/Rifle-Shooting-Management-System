<?php
    
    session_start();    
    include("code_part/connection.php");

    $sql="SELECT * FROM `tbl_news`";
    $qry=mysqli_query($con,$sql);

    $results_per_page = 3;  
    $query_14 = "SELECT * FROM `tbl_news`;";  
    $result = mysqli_query($con, $query_14);  
    $number_of_result = mysqli_num_rows($result);  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    } 
    $page_first_result = ($page-1) * $results_per_page;
    $query_14 = "SELECT * FROM tbl_news LIMIT " . $page_first_result . ',' . $results_per_page;  
    $run_14 = mysqli_query($con, $query_14);

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
    <!-- x-editor CSS
        ============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style type="text/css">
        .custom-datatable-overright table tbody tr td {
    padding-left: 10px !important;
    padding-right: 5px !important;
    font-size: 14px;
    text-align: center;
    vertical-align: baseline;
}
.fixed-table-toolbar{
    display: none;
}
.footer-copyright-area {
    position: sticky;
    bottom: 0;
    background: #06A3DA;
    padding: 20px 0px;
    text-align: center;
}
    @import url("https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap");
/* Pen Design Only */
.main_card {
  background-color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-flow: wrap;
  margin: 0;
  height: 100%;
}


/* Start */
.news_hor {
  font-family: Barlow;
  position: relative;
  overflow: hidden;
  margin: 10px;
  max-width: 678px;
  width: 100%;
  background-color: #ffffff;
  color: black;
  text-align: left;
  font-size: 16px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}

.news_hor img {
  width: 365px;
  float: left;
  
  height: 100%;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  padding-right: 30px;
  z-index: 1;
}
.news_hor:hover img,
.news_hor.hover img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.news_hor figcaption {
  padding: 5%;
  padding-bottom: 73px;
  width: 90%;
  background-color: #ffffff;
}

.news_hor h3 {
  font-family: "Cabin";
  text-transform: none;
  font-size: 18px;
  font-weight: 600;
  margin: 3px 0;
}


.news_hor footer {
  border-top: 1px solid rgba(0, 0, 0, 0.065);
  padding: 0 20px;
  font-size: 13px;
  line-height: 50px;
  text-align: left;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
}

.hor_date {
  float: left;
  margin-left: 370px;
}

.news_hor a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: 1;
}
            .hor_date
            {
                position: relative;
                left: -30px;
                font-size: 20px;
            }
            .icon 
            {
                position: relative;
                font-size: 33px;
                left: 600px;
                color: #06a3da;
            }
            .icon1 
            {
                position: relative;
                font-size: 33px;
                left: 635px;
                color: #06a3da;
            }
            
           .sparkline13-list
           {
                position:relative; 
                width:900px; 
                left:215px;
           }
           .sparkline13-graph
           {
                position:relative; 
                height:800px; 
           }
           .main_card
           {
                position:relative; 
                background:#EEF9FF; 
                box-shadow: 0 4px 8px 0 grey , 0 6px 20px 0 rgba(0, 0, 0, 0.19);
           }
           ::placeholder 
           {
                color: green;
                opacity: 1; 
            }
            .news
            {
                color: #06a3da;
                font-family: Century;
            }
            .custom-pagination
            {
                position: relative;
                left:-360px;
                top: 100px;
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
                                            <h3 class="news">Manage News</h3>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->

        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list"   >
                            <div class="sparkline13-hd">
                                <!-- <div class="main-sparkline13-hd">
                                    <h1 style="color:#06A3DA; position: relative; bottom: 10px;">Manage <span class="table-project-n"> News</span> Table</h1>
                                </div> -->
                            </div>
                            <div class="sparkline13-graph" >  
                               <div class="main_card" >
                                <!-- partial:index.partial.html -->
<?php 
    while($row=mysqli_fetch_assoc($run_14))
    {
        $id=$row['id'];
        $uurl="delete-news.php?id=".$id;                       

                 
                 echo'<figure class="news_hor">
                                     <img src="'.$row['news_photo'].'" style="height:150px;">
                        <figcaption>
                            <h3>'.$row['title_of_news'].' </h3>
                            <p>'.$row['news_desc'].' </p>
                            <footer>
                                 <div class="hor_date">'.$row['post_date'].'

                                 </div>
                                 <a href="edit-news.php?status=News&id='.$row['id'].'" style="width:0px;">
                                 <i class="uil uil-edit icon"></i>
                            </a>

                                <a onclick="delete_rec('."'$uurl'".')"style="width:0px;">

                                
                                <i class="uil uil-trash-alt icon1"></i>
                                </a>
                            </footer>
                         </figcaption>
                        
                </figure>

                ';
                }
                ?>





            </div>
</div>
</div>
<center>    
<div class="" >
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
                              <li class="page-item"><a class="page-link" href="manage_news.php?page='.$less.'">Previous</a></li>
        ';  

}
    
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '

                                   <li class="page-item"><a class="page-link" href="manage_news.php?page=' . $page . '">' . $page . '</a></li>

        ';  
    } 



    if ($_GET['page']<$number_of_page) {
    // code...
$less=$_GET['page']+1;

            echo '

<li class="page-item"><a class="page-link" href="manage_news.php?page='.$less.'">Next</a></li>

        ';  

}

     ?>

                                </ul>
                            </div> 
</center>

                    <!-- partial -->
                    























                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        




        <!-- Static Table End -->
        
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
    <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
        ============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="js/tab.js"></script>
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
