<?php 

        session_start();
        include("code_part/logo.php");

        $con=mysqli_connect("localhost","root","","rsams_db");
        if (isset($_POST['go'])) 
        {
            extract($_POST);
            $gmail=$_SESSION['email'];
            if ($_SESSION['password']==$old) 
            {
                if ($cpass==$npass) 
                {
                    $sql="UPDATE `tbl_registration` SET `password` = '$cpass' WHERE `tbl_registration`.`email` = '$gmail';";
                    $run=mysqli_query($con,$sql);
                    if ($run) 
                    { 
                        $_SESSION['password']=$cpass;
                        echo "<script>alert('Success Fully Change Password');</script>";
                        echo "<script>window.location.href='index.php';</script>";
                    }
                }

            }
            else
            {
                echo "<script>alert('Not match old password');</script>";
            }
        }
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AKS Academy</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/change.css">
         <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">       
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="" href="../admin/images/abc.jpg">                
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css'>
        <link rel='stylesheet' href='../css/login.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> 
        <link rel="shortcut icon" type="image/x-icon" href="../admin/images/abc.jpg">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </head>
    <style type="text/css">
      .show
      {
        position: relative;
      }
      .eye
      {
        position: absolute;
        top: 13px;
        right: 20px;
      }
    </style>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Change Password</header>
                    <form  method="post">
                       <!-- <div class="field input-field">
                            <input type="text" name="opass" placeholder="Enter Old Password :" class="input">
                        </div>-->

                        <div class="field input-field">
                            <input type="password" name="old" placeholder="Enter Old Password :" class="password" id="ps">
                            <i class='uil uil-eye-slash eye' id="show1" onclick="show();"></i>
                        </div>

                        <div class="field input-field">
                            <input type="password" name="npass" placeholder="Enter New Password :" class="password" id="ps1">

                        </div>


                        <div class="field input-field">
                            <input type="password" name="cpass" id="ps2"  placeholder="Enter Confirm Password :" class="password">

                        </div>
                        
                        <div class="field button-field">
                            <button type="submit" name="go">Change Password</button>
                        </div>
                    </form>

        <script type="text/javascript">

           
                      var a=document.getElementById("show1");                          // a.classList.add("uil-eye-slash");
          function show()
          {
            var ps=document.getElementById("ps");
                        var ps1=document.getElementById("ps1");
                                                var ps2=document.getElementById("ps2");

            if(ps.type=="password")
            {
              ps.type="text";
              ps1.type="text";
                            ps2.type="text";
                a.classList.remove("uil-eye-slash");
                a.classList.add("uil-eye");
              //a.classlist.remove("uil-eye-slash");
                        //  a.classlist.add("uil-eye");
            }
            else
            {

              ps.type="password";

                            ps1.type="password";
                            ps2.type="password";

                a.classList.remove("uil-eye");
                a.classList.add("uil-eye-slash");
            }
          }
        </script>

                </div>
<!-- 
                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="#" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>

             Signup Form

            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="#">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" class="password">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button>Signup</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="#" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div> -->
        </section>

        <!-- JavaScript -->
        <script src="js/script.js"></script>
    </body>
</html>