<?php
    session_start();
    include ("code_part/connection.php");
    $id=$_SESSION['id'];

    $sql="SELECT * FROM `tbl_registration` WHERE id=$id";
    $qry=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($qry);

    $uname=$row['username'];


    if (isset($_POST['submit']))
    {
        $uname=$_POST['uname'];
        $msg=$_POST['msg'];
        $estrellas=$_POST['estrellas'];
        $date = date('m/d/Y', time());
        $rat=3;
        $sql1="INSERT INTO `tbl_feedback` (`id`, `user_id`, `feed_name`, `feed_desc`,`post_date`, `feed_rate`) VALUES (NULL, '$id', '$uname', '$msg','$date','$estrellas');";
        $qry1=mysqli_query($con,$sql1);
        if($qry1)
        {
            echo "<script>alert('Record Insert Successfully');</script>";
        }
        else
        {
            echo "<script>alert('Not Insert Record Successfully');</script>";
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
                                            <h3 style="color: #06a3da;font-family: Century;">Add FeedBack</h3>
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
        
<style type="text/css">
    .box1 
    {
        position: relative;
        height: 400px;
        width: 350px;
        border: 2px solid #06a3da;
        border-radius: 20px;
        box-shadow: 0 4px 8px 0 grey , 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        left: 430px;
    }
    .heading
    {
        position: relative;
        left: 0px;
        top: 20px;
    }
    .input3
    {
        position: relative;
        border-radius: 10px;
        top: 40px;
        height:40px;
        width: 290px;
       background: #EEF9FF;
       border: 2px solid #06a3da;
    }
    .input2
    {
         position: relative;
        border-radius: 10px;
        top: 40px;
        height: 100px;
        width: 290px;
       background: #EEF9FF;
       border: 2px solid #06a3da;
    }
    .checked
    {
        color: orange;
    }
    .star
    {
        position: relative;
        top: 35px;
        text-align: left;
        left: 30px;
    }
    .str 
    {
        position: relative;
        top:30px;
        left: -89px;
    }
    .btn1
    {
        position: relative;
        top:-70px;
        height: 35px;
        width: 190px;
        border: 2px solid #06a3da;
        background: #06a3da;
        color: black;
        border-radius: 10px;
    }
    .btn1:hover
    {
        position: relative;
        color: #fff;
    }






#wrapper form input[type="submit"] {
  border: 1px solid #d9d9d9;
  background-color: #efefef;
}

input[type="radio"] {
  display: none;
}

label {
  color: grey;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}

</style>
        <div class="notification-area mg-b-15">
            <div class="container-fluid">
             <form action="#" method="post" >
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="notification-list shadow-inner nt-mg-b-30" style="position:relative;width: 1300px;height: 500px;">
                            <div class="bg-light text-center" style="padding: 30px;">
        <div class="box1">
            <h3 class="heading">FeedBack</h3>
            <div>
                <input type="txt" name="uname" value="<?php echo $uname; ?>" placeholder= " &nbsp;Username" class="input3">
            </div><br>
             
            <div>
                <textarea type="text" name="msg" placeholder= "  Message" class="input2"></textarea>
            </div><br>
            <h4 class="star">Star Rating</h4>
           
<br>
<br>
<style type="text/css"> 

label {
    FONT-SIZE: 27px;
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    left: -70px;
    top: -15px;
    position: relative;
}
#wrapper form input[type="submit"] {
  border: 1px solid #d9d9d9;
  background-color: #efefef;
}

</style>

       <input id="radio1" type="radio" name="estrellas" value="5"><!--
      --><label for="radio1">&#9733;</label><!--
      --><input id="radio2" type="radio" name="estrellas" value="4"><!--
      --><label for="radio2">&#9733;</label><!--
      --><input id="radio3" type="radio" name="estrellas" value="3"><!--
      --><label for="radio3">&#9733;</label><!--
      --><input id="radio4" type="radio" name="estrellas" value="2"><!--
      --><label for="radio4">&#9733;</label><!--
      --><input id="radio5" type="radio" name="estrellas" value="1"><!--
      --><label for="radio5">&#9733;</label>


           </div>




    
            <button class="btn1" name="submit" type="submit" value="submit">Send</button>  
        </div>

                        </div>

            </div>
                    </div>
                    </form>

                </div>
                 
        </div>
        <!-- Notification End-->
        <div class="footer-copyright-area" style="position: sticky;bottom: 0px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
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
   
</body>

</html>