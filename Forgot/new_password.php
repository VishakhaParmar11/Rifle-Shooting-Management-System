<?php

    include("../code_parts/logo.php");
    session_start();


if ($_SESSION['email']=='') {
    // code...
    echo "<script>window.location.href='index.php';</script>";

}


        $con=mysqli_connect("localhost","root","","rsams_db");

        if (isset($_POST['go'])) {
            extract($_POST);


$gg=$_SESSION['email'];
            // code...
            $sql="UPDATE `tbl_registration` SET `password` = '$pass'  where email='$gg'";

    $qry=mysqli_query($con,$sql)or die("Query Error");

if ($qry) {
    // code...



    //mail code
    //over otp
echo "<script>alert('Success fully Update password');</script>";

echo "<script>window.location.href='../Login/login.php';</script>";
}


        }
    

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>AKS Academy</title>
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
        top: 15px;
        right: 20px;
      }
  </style>
<body>
<!-- partial:index.partial.html -->
<div class="flex justify-center items-center min-h-screen">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
    <h2 class="text-3xl font-bold mb-6 text-center text-white">
      <span class="bg-gradient-to-r text-transparent from-blue-500 to-purple-500 bg-clip-text title" >
        Forget Password
      </span>
    </h2>
    <form method="post">
     






      
      <div class="mb-6">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
          <i class="fas fa-lock mr-2"></i>Enter New Password
        </label>

        <div class="show">
              <div class="eye">
                <i class="uil uil-eye-slash" id="show1" onclick="show();"></i>
              </div>
              <input  name="pass" type="password" id="ps" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter New password">
              <!-- <i class="uil uil-eye-slash"></i> -->
              <!-- <i class="uil uil-eye-slash"></i> -->
              <!-- <i class="uil uil-eye-slash showHidePw" id="show" onclick="show();"></i> -->
              <!-- <i class="uil uil-eye-slash"></i> -->
        </div>
        <script type="text/javascript">

           
                      var a=document.getElementById("show1");                          // a.classList.add("uil-eye-slash");
          function show()
          {
            var ps=document.getElementById("ps");

            if(ps.type=="password")
            {
              ps.type="text";
                a.classList.remove("uil-eye-slash");
                a.classList.add("uil-eye");
              //a.classlist.remove("uil-eye-slash");
                        //  a.classlist.add("uil-eye");
            }
            else
            {
              ps.type="password";

                a.classList.remove("uil-eye");
                a.classList.add("uil-eye-slash");
            }
          }
        </script>
      </div>




      <div class="flex items-center justify-center">
        
        <button type="submit" id="login" name="go" class="cs bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline w-full">
          Forget Password
        </button>
      </div>
      
    </form>
    
    <!-- <div class="mt-4">
      <p class="text-center text-gray-600">Or log in with:</p>
      <div class="flex justify-center mt-2">
        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mx-2">
          <i class="fab fa-google"></i>
        </a>
      </div> -->
    </div>
  </div>
</div>
<!-- partial -->
</body>
   <!-- <script type="text/javascript" src="script.js"></script>  -->
</html>
