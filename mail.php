<?php
session_start();
$_SESSION['gmail']="asproject417@gmail.com";
      $receiver = "asproject417@gmail.com";
      $otp=rand ( 1000 , 9999 );
        $subject = "Code verification :";
        $body = "Your email verification code is :".$otp;
        $sender = "From:parmarvishakha44@gmail.com";
        if(mail($receiver, $subject, $body, $sender))
        { 
          echo "successfull...";  
        }
        else
        {
          echo "failed...";
        }
  //}
?>