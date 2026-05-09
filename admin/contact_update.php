<?php
                session_start();

                    include ("code_part/connection.php");

                    $status=$_GET['status'];

                    $id=$_GET['id'];
if ($status==0) {
	// code...
	//echo "<script>alert('0');</script>";




                    $sql1="UPDATE `tbl_registration` SET `status` = '0'";
                    $qry1=mysqli_query($con,$sql1);
                    



$sql="UPDATE `tbl_registration` SET `status` = '1' WHERE `tbl_registration`.`id` = $id;";
                    $qry=mysqli_query($con,$sql);
                    
                    if ($qry) {
                    	// code...

                    	echo "<script>window.location.href='manage_contact.php?status=Contact_Us';</script>";
                    }
 











}else{
	//echo "<script>alert('1');</script>";

$sql="UPDATE `tbl_registration` SET `status` = '0' WHERE `tbl_registration`.`id` = $id;";
    $qry=mysqli_query($con,$sql);
                    


                    
                    if ($qry) {
                    	//code...

                    	echo "<script>window.location.href='manage_contact.php?status=Contact_Us';</script>";
                    }
 

}



?>