<?php 

      session_start();
        $con=mysqli_connect("localhost","root","","rsams_db");

        if (isset($_POST['go'])) {
            extract($_POST);
            // code...
            $sql="SELECT * FROM `tbl_registration` where email='$email'";

    $qry=mysqli_query($con,$sql)or die("Query Error");

    $num_total=mysqli_num_rows($qry);
if ( $num_total>=1) {
    // code...



    //mail code


$receiver = "$email";
      $otp=rand ( 1000 , 9999 );
$_SESSION['otp']=$otp;
$_SESSION['email']=$email;
        $subject = "Code verification :";
        $body = "Your email verification code is :".$otp;
        $sender = "From:parmarvishakha44@gmail.com";
        if(mail($receiver, $subject, $body, $sender))
        { 
          //echo "successfull...";  
        }
        else
        {
          //echo "failed...";
        }

    //over otp
echo "<script>window.location.href='otp.php';</script>";
}else{
echo "<script>alert('please first registration');</script>";

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
        <link rel="stylesheet" href="forgot1.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
   <link rel="shortcut icon" type="image/x-icon" href="../admin/images/abc.jpg">

                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Forgot Password</header>
                    <form  method="post">
                    <div class="field input-field">
                            <input type="email" name="email" placeholder="Enter Email ID" class="password">
                            
                    </div>
                   <!--  <div class="field input-field">
                            <input type="password" placeholder="Confirm Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                    </div> -->
                    <div class="field button-field">
                            <button type="submit" name="go">Next</button>
                        </div>
                    </form> 
                </div>
            </div>
    </section>
</body>
</html>