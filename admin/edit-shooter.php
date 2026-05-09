<?php  
    session_start();

    include ("code_part/connection.php");
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
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <?php
        include("code_part\sidebar.php");
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
                
                $id=$_GET['id'];
                $sql="SELECT * FROM `tbl_registration` WHERE id=$id";
                $qry=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($qry);
                $username=$row['username'];
                $gender=$row['gender'];
                $dob=$row['dob'];
                $photo=$row['photo'];
                $address=$row['address'];
                $phone_no=$row['phone_no'];
                $email=$row['email'];
                $height=$row['height'];
                $weight=$row['weight'];
                $age=$row['age'];
                $gun_selection=$row['gun_selection'];
                $hand_selection=$row['hand_selection'];
                $fees=$row['fees'];
                $password=$row['password'];
                $card_holder=$row['card_holder'];
                $cvc=$row['cvc'];
                $expiery_date=$row['expiery_date'];
                $otp=$row['otp'];
                $status=$row['status'];
                $role=$row['role'];
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
                                            <!-- <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <h3 style="position:relative; font-family: centuary; font-size: 23px; color:#06A3DA;">Shooters Details</h3>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                               <center><img src="../Registration/<?php echo $row['photo'];?>"style="width: 240px; height:240px;" alt="" /></center>
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b style="color: #06A3DA;">Name</b><br /><?php echo $username; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b style="color: #06A3DA;">Hand_Selection</b><br /><?php echo $hand_selection; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p ><b style="color: #06A3DA;">Email ID</b><br /> <?php echo $email; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b style="color: #06A3DA;">Phone</b><br /> <?php echo $phone_no; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            <p ><b style="color: #06A3DA;">Address</b><br /><?php echo $address; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style type="text/css">

                    </style>
                    
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#INFORMATION" style="color: #06A3DA;">Update Details</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="INFORMATION">
                                    <div class="row">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-lg-6" >
                                                        <div class="form-group">
                                                            <input name="name"  type="text" class="form-control" placeholder="First Name" value="<?php echo $username; ?>"> 
                                                        </div>
                                                        <!-- <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div> -->
                                                        <div class="form-group">
                                                            <input type="text" name="add" class="form-control" placeholder="Address"
                                                            value="<?php echo $address; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="dob" class="form-control" value="<?php echo $dob; ?>" placeholder="Date of Birth">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="phone" class="form-control" value="<?php echo $phone_no; ?>" placeholder="Phone No">
                                                        </div>
                                                       <!--  <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="Pincode">
                                                        </div> -->
                                                        <div class="file-upload-inner ts-forms">
                                                            <div class="input prepend-big-btn">
                                                                <label class="icon-right" for="prepend-big-btn">
                                                                        <i class="fa fa-download"></i>
                                                                    </label>
                                                                <div class="file-button" style="background: #06A3DA;">
                                                                    Brows
                                                                    <input type="file" name="photo" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                </div>
                                                                <input type="text" id="prepend-big-btn" placeholder="no file selected" style="position: relative;border: 2px solid #06A3DA; ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                            <input type="text" name="age" value="<?php echo $age; ?>" class="form-control" placeholder="Age">
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" name="gn" value="<?php echo $gender; ?>">
                                                                <option>Select Gender</option>
                                                                <?php
                                                                if($row['gender']=='Male')
                                                                {
                                                                    echo"<option value='Male' selected='true'>Male</option>";
                                                                    echo "<option value='Female'>Female</option>";
                                                                    
                                                                }
                                                                elseif ($row['gender']=='Female')
                                                                {
                                                                    echo"<option value='Male'>Male</option>";
                                                                    echo "<option value='Female' selected='true'>Female</option>";    
                                                                }
                                                                else
                                                                {
                                                                echo"<option value='Male'>Male</option>";
                                                            echo "<option value='Female'>Female</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" name="hand_select" value="<?php echo $gender; ?>">>
                                                                <option>Select Hand</option>
                                                                <?php
                                                                if($row['hand_selection']=='Lefty')
                                                                {
                                                echo "<option value='Lefty' selected='true'>Lefty</option>";
                                                echo "<option value='Righty'>Righty</option>";
                                                                }
                                                                elseif($row=['hand_selection']=='Righty')
                                                                {
                                            echo "<option value='Lefty'>Lefty</option>";
                                            echo "<option value='Righty' selected='true'>Righty</option>";
                                                                }
                                                                else
                                                                {
                                                    echo "<option value='Lefty'>Lefty</option>";
                                            echo "<option value='Righty'>Righty</option>";                
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                       <div class="form-group">
                                                            <select class="form-control" name="g_selection" value="<?php echo $gun_selection; ?>">>
                                                                <option>Guns Type</option>
                                                                <?php 
                                                                    if($row['gun_selection']=='Pistol')
                                                                    {
                                            echo "<option value='Pistol' selected='true'>Pistol</option>";
                                            echo "<option value='Rifle'>Rifle</option>";
                                                                    }
                                                                    elseif($row=['gun_selection']=='Rifle')
                                                                    {
                                            echo "<option value='Pistol'>Pistol</option>";
                                            echo "<option value='Rifle' selected='true'>Rifle</option>"; 
                                                                    }
                                                                    else
                                                                    {
                                            echo "<option value='Pistol'>Pistol</option>";
                                            echo "<option value='Rifle' >Rifle</option>";   
                                                                    }
                                                                 ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="email"  type="text" class="form-control" placeholder="First Name" value="<?php echo $email; ?>"> 
                                                        </div>
                                                        
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress mg-t-15">
                                                            <button type="submit" name="update" class="btn btn-primary waves-effect waves-light mg-b-15" style="position: relative; background:#06A3DA;border: 2px solid #06A3DA; top:20px;">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php

                                        if(isset($_POST['update']))
                                        {
                                            $username=$_POST['name'];
                                            $gender=$_POST['gn'];
                                            $dob=$_POST['dob'];
                                            $address=$_POST['add'];
                                            $phone_no=$_POST['phone'];
                                            $email=$_POST['email'];
                                            $age=$_POST['age'];
                                            $gun_selection=$_POST['g_selection'];
                                           $hand_selection=$_POST['hand_select'];
                                           $f_name=$_FILES['photo']['tmp_name'];
                                           $path="image/avtar/".$_FILES['photo']['name'];

                                           if(move_uploaded_file($f_name,$path))
                                           {


                                       // echo "<script>alert('hy');</script>";
                                                $sql1="UPDATE `tbl_registration` SET `username` = '$username', `gender` = '$gender', `dob` = '$dob', `photo` = '$path', `address` = '$address', `email` = '$email', `phone_no` = '$phone_no', `age` = '$age', `gun_selection` = '$gun_selection', `hand_selection` = '$hand_selection' WHERE `tbl_registration`.`id` = $id;";
                                           }
                                           else
                                           {
                                                $sql1="UPDATE `tbl_registration` SET `username` = '$username', `gender` = '$gender', `dob` = '$dob', `address` = '$address', `email` = '$email', `phone_no` = '$phone_no', `age` = '$age', `gun_selection` = '$gun_selection', `hand_selection` = '$hand_selection' WHERE `tbl_registration`.`id` = $id;";
                                           }
                                           $qry1=mysqli_query($con,$sql1);
                                           if ($qry1) 
                                           {
                                                $_SESSION['alert']=1;
                                                $_SESSION['alert_title']="UPDATE";
                                            echo "<script>window.location.href='Manage_Shooters.php'</script>;";
                                           }
                
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- footer start -->
            <?php 
                include ("code_part/footer.php");
            ?>
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