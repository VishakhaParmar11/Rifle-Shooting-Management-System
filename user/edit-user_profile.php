<?php
    session_start();

    include("code_part/connection.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKS Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
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
        .footer-copyright-area 
        {
            position: sticky;
            bottom: -10px;
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
        <?php

            include("code_part/header.php");

             $id=$_SESSION['id'];
             $sql1="SELECT * FROM `tbl_registration` where id=$id";
             $qry1=mysqli_query($con,$sql1);
             $row1=mysqli_fetch_assoc($qry1);

             $username=$row1['username'];
             $email=$row1['email'];
             $dob=$row1['dob'];
             $gender=$row1['gender'];
             $address=$row1['address'];
        ?>
            <!-- Mobile Menu start -->
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">News</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod" style="color: #06A3DA;">Add News</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <div class="border" style="position: relative; border-bottom: 2px solid #06A3DA; top: 0px;">
                            <center><div class="admin" style="position: relative; color:#06A3DA;
                            left:0px;font-size: 25px; position: relative;"><i class="uil uil-user" style="position: relative; color:#06A3DA;"></i>&nbsp;
                                Edit Profile
                              </div></center>
                            </div>
                            <div class="div1" style="position: relative; width:1100px; height:700px; border:2px;">
                                <form action="" method="post" enctype="multipart/form-data">
                                <div class="div2" style="position: relative; width:450px;height: 640px; border:3px solid #06a3da; top: 20px; left: 430px; border-radius:20px;
                                     box-shadow: 0 4px 8px 0 grey , 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                    <div style="position: relative;left: 390px;top: 10px;border-radius: 20px; height: 35px; width:35px;
                                   ">
                                        <!-- <img src="img\pen.png"> -->
                                    
                                    </div>
                                        <div class="img">
                                            <img src="../Registration/<?php echo $row1['photo'];?>"onclick="f_get()" style="position: relative; border-radius:40px;height: 100px; width:100px; top:-20px;left: 170px;">
                                            <input type="file" id="img_f" name="photo" style="display:none;">
                                        </div>

        <script type="text/javascript">
                function f_get()
            {

                var i=document.getElementById("img_f");
                i.click();
                                             
            }
        </script>

                                    <!-- <div style="position: relative; top: -90px;left: 50px; font-weight: bold;color: #06A3DA;font-size: 15px;">
                                        Hetal Parmar<br>
                                        <span style="position: relative;top:-6px;
                                        font-size: 15px;">hetalparmar@gmail.com</span>
                                    </div> -->
                                    <div class="icons" style="position:relative;width:30px;height: 30px; border: 2px solid #06a3da; border-radius:50px; font-size: 20px;left: 100px; ">
                                        <i class="uil uil-user" style="position:relative; 
                                        left: 4px;color: #06a3da;"></i>
                                    </div>
                                    <div class="attribute" style="position: relative; top: -30px;left: 170px;font-size: 19px;color: #06a3da;">
                                        <span>Admin Name</span>
                                    </div>
                                    <div class="attribute" style="position: relative; top: -30px;left: 170px;font-size: 15px;">
                                        <!-- <span>Hetal Parmar</span> -->
                                        <input type="text" name="uname" placeholder="" value="<?php echo $username; ?>"  class="input3" style="position:relative;  border:2px solid #06a3da; width: 200px;padding: 5px;border-top: none;border-left: none;border-right: none; outline: none;">
                                    </div>

                                     <div class="icons" style="position:relative;width:30px;height: 30px; border: 2px solid #06a3da; border-radius:50px; font-size: 20px;left: 100px;top: -10px; ">
                                        <i class="uil uil-envelope" style="position:relative; 
                                        left: 4px;color: #06a3da;"></i>
                                    </div>
                                    <div class="attribute" style="position: relative; top: -40px;left: 170px;font-size: 19px;color: #06a3da;">
                                        <span>Email ID</span>
                                    </div>
                                    <div class="attribute" style="position: relative; top: -40px;left: 170px;font-size: 15px;">
                                       <input type="email" name="email" placeholder="" value="<?php echo $email; ?>"  class="input3" style="position:relative;  border:2px solid #06a3da; width: 200px;padding: 5px;border-top: none;border-left: none;border-right: none; outline: none;">
                                    </div>

                                    <div class="icons" style="position:relative;width:30px;height: 30px; border: 2px solid #06a3da; border-radius:50px; font-size: 20px;left: 100px;top: -10px; ">
                                        <i class="uil uil-calendar-alt" style="position:relative; 
                                        left: 4px;color: #06a3da;"></i>
                                    </div>
                                    <div class="attribute" style="position: relative; top: -40px;left: 170px;font-size: 19px;color: #06a3da;">
                                        <span>DOB</span>
                                    </div>
                                    <div class="attribute" style="position: relative; top: -40px;left: 170px;font-size: 15px;padding: 5px;">
                                        <input type="date" name="dob" placeholder="" value="<?php echo $dob; ?>"  class="input3" style="position:relative;  border:2px solid #06a3da; width: 200px;padding: 5px;border-top: none;border-left: none;border-right: none; outline: none;">
                                    </div>

                                    <div class="icons" style="position:relative;width:30px;height: 30px; border: 2px solid #06a3da; border-radius:50px; font-size: 20px;left: 100px;top: -10px; ">
                                        <i class="uil uil-user-check" style="position:relative; 
                                        left: 4px;color: #06a3da;"></i>
                                    </div>
                                    <div class="attribute" style="position: relative; top: -40px;left: 170px;font-size: 19px;color: #06a3da;">
                                        <span>Gender</span>
                                    </div>
                                    <div class="attribute" style="position: relative; top: -40px;left: 170px;font-size: 15px;">
                                        <input type="radio" name="gn" value="Male"  <?php if($row1['gender']=='Male'){ echo "checked";}?>>&nbsp;&nbsp;Male&nbsp;&nbsp;
                                        <input type="radio" name="gn" value="Female" <?php if($row1['gender']=='Female'){ echo "checked";}?>>&nbsp;&nbsp;Female
                                    </div>s

                                    <div class="icons" style="position:relative;width:30px;height: 30px; border: 2px solid #06a3da; border-radius:50px; font-size: 20px;left: 100px;top: -10px; ">
                                        <i class="uil uil-at" style="position:relative; 
                                        left: 4px;color: #06a3da;"></i>
                                    </div>
                                    <div class="attribute" style="position: relative; top: -40px;left: 170px;font-size: 19px;color: #06a3da;">
                                        <span>Address</span>
                                    </div>
                                    <div class="attribute" style="position: relative; top: -40px;left: 170px;font-size: 15px;">
                                        <textarea name="address"style="position:relative;border: 2px solid #06a3da;border-right: none;border-left: none;border-top: none;outline: none;"><?php echo $address; ?>"</textarea>
                                        <div>
                                        <button type="submit" name="submit" class="btn" style="position:relative; border-radius:10px;border: 2px solid;color: #ffff; background: #06a3da;top: 20px;left: -120px; width: 350px;">Submit</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>

<?php
    if(isset($_POST['submit']))
    {
        $photo=$_FILES['photo']['tmp_name'];
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $gn=$_POST['gn'];
        $address=$_POST['address'];
        $path="../Registration/upload/".$_FILES['photo']['name'];
        $tmp_path="upload/".$_FILES['photo']['name'];

        if(move_uploaded_file($photo,$path))
        {
            // echo "<script>alert('File Upload Successfully');</script>";
            $sql="UPDATE `tbl_registration` SET `username` = '$uname', `gender` = '$gn', `dob` = '$dob', `photo` = '$tmp_path', `address` = '$address', `email` = '$email' WHERE `tbl_registration`.`id` = $id;";
        }
        else
        {
            $sql="UPDATE `tbl_registration` SET `username` = '$uname', `gender` = '$gn', `dob` = '$dob', `address` = '$address', `email` = '$email' WHERE `tbl_registration`.`id` = $id;";
        }
        
        $run=mysqli_query($con,$sql);
        if($run)
        {
            echo '<script>window.location.href="edit-user_profile.php";</script>';
        }
    }
?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
         <!-- footer start -->
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
        <!-- footer end -->
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
    <!-- maskedinput JS
        ============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
        ============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
        ============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
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
</body>

</html>