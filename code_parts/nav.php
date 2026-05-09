<!-- Navbar & Carousel Start -->

<?php 
    error_reporting(0);
   session_start();
   $kk=$_SESSION['id'];
 ?>

<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <img rel="stylesheet" src="abc.jpg" style="border-radius:30px;width:55px;height:50px;top:15px;position:absolute;left:10px;">
            <h1 class="m-0" style="position:absolute; left:70px; top:18px;">AKS Academy</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php?status=index" class="nav-item nav-link <?php 
                       
                       if ($_GET['status']=='index')
                        {
                            echo'active';
                        }
                        if ($_GET['status']=='')
                        {
                            echo 'active';
                        }
                    ?>">Home</a>
                    <a href="about.php?status=About_Us" class="nav-item nav-link
                    <?php 
                        error_reporting(0);
                        if ($_GET['status']=='About_Us')
                        {
                            echo'active';
                        }
                    ?>
                    ">About</a>
                    <a href="classes.php?status=Classes" class="nav-item nav-link
                    <?php 
                        error_reporting(0);
                        if ($_GET['status']=='Classes')
                        {
                            echo'active';
                        } 
                    ?>">Classes</a>
                    <a href="champions.php?status=Awards" class="nav-item nav-link
                   







<?php 
if (!$_SESSION['role']=="") {
    // code...
?>

                    <?php 
                        error_reporting(0);
                        if ($_GET['status']=='Awards')
                        {
                            echo'active';
                        } 
                    ?>">Awards</a>
                   

                    <a href="medal.php?status=Medals" class="nav-item nav-link
                    <?php 
                        error_reporting(0);
                        if ($_GET['status']=='Medals')
                        {
                            echo'active';
                        } 
                    ?>">Medals</a>
                   
            <a href="activity.php?status=Activity" class="nav-item nav-link
                    <?php 
                        error_reporting(0);
                        if ($_GET['status']=='Activity')
                        {
                            echo'active';
                        } 
                    ?>">Activity</a>
                   


<?php 

}

 ?>








                    <a href="news.php?status=News" class="nav-item nav-link
                    <?php 
                        error_reporting(0);
                        if ($_GET['status']=='News')
                        {
                            echo'active';
                        } 
                    ?>">News</a>



                    <a href="contact.php?status=Contact_Us" class="nav-item nav-link
                    <?php 
                        if ($_GET['status']=='Contact_Us')
                        {
                            echo'active';
                        }
                    ?>
                    ">Contact</a>
                </div>
               

               &nbsp;&nbsp;&nbsp;

                <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
   


   <!-- code is here -->
   
   <style type="text/css">
  

  @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800");


.User-area {
  width: 45px;
  height: 45px;
  position: relative;
  cursor: pointer;
}
.User-area > .User-avtar {
  width: 100%;
  height: 100%;
  border-radius: 30px;
  border: 2px solid #fff;
  box-shadow: 0px 0px 12px -5px #000;
}
.User-area > .User-avtar > img {
  width: 100%;
  height: 100%;
  border-radius: 30px;
}

.User-Dropdown {
  display: none;
  position: absolute;
  border-radius: 7px;
  background: #fff;
  box-shadow: 0px 0px 8px rgba(214, 214, 214, 0.78);
  list-style: none;
  padding: 0 20px;
  width: 188px;
  margin: 0;
  top: 70px;
  right: -9%;
}
.User-Dropdown:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  margin-left: -0.5em;
  right: 0px;
  box-sizing: border-box;
  border: 7px solid black;
  border-color: transparent transparent #ffffff #ffffff;
  transform-origin: 0 0;
  transform: rotate(135deg);
  box-shadow: -3px 3px 3px -3px rgba(214, 214, 214, 0.78);
}
.User-Dropdown.U-open {
  display: block;
  width: 250px;
}
.User-Dropdown > li {
  padding: 0px;
  line-height: 47px;
  border-bottom: 1px solid rgba(215, 215, 215, 0.17);
}
.User-Dropdown > li:last-child {
  border-bottom: 0px;
}
.User-Dropdown > li > a {
  font-size: 13px;
  padding: 15px 25px 16px 10px;
  text-decoration: none;
  color: #1787e0;
  transition: all 0.2s ease-out;
}
.User-Dropdown span {
  background: #16d67a;
  padding: 3px 10px;
  color: #fff;
  border-radius: 30px;
  font-size: 13px;
}
.User-Dropdown > li:before {
  content: "";
  width: 0px;
  height: 40px;
  position: absolute;
  background: #2196F3;
  margin-top: 4px;
  border-radius: 0 1px 1px 0;
  left: 0px;
  transition: all 0.2s ease;
}
.User-Dropdown > li:hover:before {
  width: 5px;
  border-radius: 30px;
}
.User-Dropdown > li a:hover {
  margin-left: 5px;
}
/*.dropdown1 li a
{
    font-size: 25px;
}*/
</style>


<!-- partial:index.partial.html -->

<?php 

include("admin/code_part/connection.php");

if ($con) 
{
    if (!$kk=="") {
        // code...
    
    $sql="SELECT * FROM `tbl_registration` where id=$kk";
}else{

$sql="SELECT * FROM `tbl_registration` where id=1";

}
    $qry=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($qry);
    //echo "<script>alert('".$row['photo']."');</script>";
}
if ($_SESSION['role']=='user') {
    // code...

    echo '
<div class="User-area">
  <div class="User-avtar">
     <img src="Registration/'.$row['photo'].'" />



  </div>
    <ul class="User-Dropdown U-open" class="dropdown1">
      <li><a href="../../../../RSMS_Project/user/user_profile.php" style="font-size:18px;"><i class="uil uil-user-square" style="font-size:22px;"></i>&nbsp;My Profile</a></li>
      <li><a href="../../../../RSMS_Project/user" style="font-size:18px;"><i class="uil uil-create-dashboard" style="font-size:20px;"></i style="font-size:12px">&nbsp;Dashboard</a></li>
      <li><a href="../../../../RSMS_Project/Login/logout.php" style="font-size:18px;"><i class="uil uil-sign-out-alt" style="font-size:22px;"></i>&nbsp;Logout</a></li>
    </ul>
</div>


    ';
}else{
        echo ' <a href="../../../../../RSMS_project/Login/login.php" class="btn btn-primary py-2 px-4 ms-3" >Login</a>';
}
 ?>

<style type="text/css">
</style>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

  <script>
    
    $('.User-avtar').click(function(){
  if( $(".User-Dropdown").hasClass( "U-open" ) ){
          $('.User-Dropdown').removeClass("U-open");
  }
  else {
          $('.User-Dropdown').addClass("U-open");
  }
});
  </script>
            

            </div>
        </nav>


    
    <script>
 var act=document.getElementsByClassName("active");
    act[0].style="color:#06a3da;";

    </script>
