<?php
session_start();

     include ("code_part/connection.php");
     $id=$_SESSION['id'];


    $sql="SELECT * FROM `tbl_registration` where id=$id";
    $qry=mysqli_query($con,$sql);

    $row=mysqli_fetch_assoc($qry);
                        
                        $name=$row['username'];
                        $email=$row['email'];
                        $phone=$row['phone_no'];



                        if(isset($_POST['submit'])) {
                                               $des=$_POST['ms'];

                                                $sql1="INSERT INTO `tbl_contact_us` (`id`, `user_id`, `cont_name`, `cont_desc`, `post_date`) VALUES (NULL, '1', '$name', '$des', '$phone');";

                                                $qry1=mysqli_query($con,$sql1);

                                                if ($qry1) {
                                                    
                                            echo "<script>alert('Insert Record Successfully');</script>";

                                                }

                                                    }

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
    <!-- notifications CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notifications/Lobibox.min.css">
    <link rel="stylesheet" href="css/notifications/notifications.css">
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
        .uill
            {
                position: relative;
                left: 510px;
                top:10px;
                font-size: 40px;
                color: #06a3da;
            }
            .head
            {
                position: relative;
                color: #06a3da;
                top:20px;
                font-family:Century;
            }
            .custom-pagination
            {
                width: 300px;
                position: relative;
                left: 560px;
                top: -10px;
            }
            @import url(https://fonts.googleapis.com/css?family=Cherry+Swash);

.body{
  margin:0;
  padding:0;
  }

h2{
  font-size:35px;
  text-align:center;
  font-family:Century;
  text-shadow:2px 1px 1px #fff;
}

.formBox{
  margin:200px auto;
  max-width:500px;
  background:;
  padding:50px;
  border-radius:20px;
  border: 3px solid #06a3da;
  box-shadow:5px 4px 10px;
  height: 550px;

}

.inputBox{
  position:relative;
  margin-top:40px;
  boder-size:border-box;
  }


.input{
  width:100%;
  height:40px;
  border-radius: 10px;
  border:2px solid #06a3da;
  background:transparent;
}

.inputText{
  font-family:Cherry Swash;
  position:absolute;
  color:black;
  line-height:50px;
  transition:.5s ease;
  opacity:.5;
  font-size: 20px;
  font-weight: bolder;
}


.focus .inputText{
  transform:translateY(-30px);
  color:black;
}

textarea{
  height:100px !important;
  border:none;
  border-bottom:2px solid #06a3da;
  background:transparent;
  
}

.button{
  font-family:Cherry Swash;   
  width:100%;
  height:40px;
  border:none;
  font-weight:bold;
  font-size:20px;
  border-radius:10px;
  position:relative;
  top:40px;
  outline:none;
  background: #06a3da;
  color: #fff;
}

.button:hover{
   background:#06a3da;
   color: #fff;
}
 .footer-copyright-area {
    position: sticky;
    bottom: 0;
    background: #06A3DA;
    padding: 20px 0px;
    text-align: center;
}
    </style>
</head>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <!-- End Left menu area -->
   
   <!-- Sidebar Start -->
        <?php
            include("code_part/sidebar.php");
        ?>
   <!-- Sidebar End -->

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
                                            <ul class="breadcome-menu">
                                            <h3 style="color: #06a3da;font-family: Century;">Contact Us Form</h3>
                                        </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notification start-->
        

        <div class="notification-area mg-b-15">
            <div class="container-fluid">
             
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30" style="position:relative;width: 1300px;height: 700px;">
                            <div class="bg-light text-center" style="padding: 30px;">
        <div class="box1">
           <div class="container-fluid">
  <div class="container" style="height:500px;">
    <form action="" method="post">

    <div class="formBox" style="position:relative; top: -200px;">
      
        <div class="row">
          <div class="col-xs-12">
            <h2>Contact Us</h2>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <div class="inputBox">
                <div class="inputText" name="name">&nbsp;&nbsp;</div>
                <input type="text" class="input" value="<?php echo $name; ?>" style="position: relative;  border:2px solid #06a3da;   border-radius: 10px; color: black;width: 55vh;">
              </div>
            </div>


            



          </div>

          <div class="row">
            <div class="col-xs-6">
              <div class="inputBox" style="position:relative; top:-8px;">
                <div class="inputText">&nbsp;&nbsp;</div>
                <input type="text" class="input" value="<?php echo $email;?>" style="position: relative;  border:2px solid #06a3da; border-radius: 10px; color: black;">
              </div>
            </div>

            <div class="col-xs-6">
              <div class="inputBox">
                <div class="inputText">&nbsp;&nbsp;</div>
                <input type="phone" value="<?php echo $phone; ?>" class="input" >
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-xs-12">
              <div class="inputBox">
                <div class="inputText">&nbsp;&nbsp;Message</div>
                <textarea cols="30" rows="10" class="input" value="<?php echo $des; ?>" name="ms" style="color: black;"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" name="submit" class="button">
            </div>
          </div>
        </div>
    </div>
    </form>
  </div>
</div>
</div>
                 
        </div>

    </div>
</div>
</div>
</div>
</div>
        <!-- Notification End-->
        <div class="footer-copyright-area" style="position: sticky;bottom: 0px; width: 100pc;" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by vishakha And Parmar  </p>
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
    <!-- notification JS
        ============================================ -->
    <script src="js/notifications/Lobibox.js"></script>
    <script src="js/notifications/notification-active.js"></script>
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
   <script>
    $(document).ready(function(){
  
  $(".input").focus(function(){
    
    $(this).parent().addClass("focus");
  }).blur(function(){
    
    if($(this).val() === ""){
      $(this).parent().removeClass("focus");
      
    }
    
  });
  
    
  
});
   </script>
</body>

</html>