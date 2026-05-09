<?php 


    $con=mysqli_connect("localhost","root","","rsams_db")or die("Database Server Error");
$id=$_GET['id'];
$page=$_GET['page'];

if ($page=="add_shooter") {
    // code...


    $sql="UPDATE `tbl_registration` SET `status` = '1' WHERE `tbl_registration`.`id` = $id;";
    $run=mysqli_query($con,$sql);




    if ($run) {
        // code...

echo "<script>window.location.href='../../../RSMS_project/admin/Add_shooturs.php?status=Shooters_Detalis';</script>";
    }
}else if ($page=="index") {
    // code...
    $sql1="UPDATE `tbl_registration` SET `status` = '1' WHERE `tbl_registration`.`id` = $id;";
    $run1=mysqli_query($con,$sql1);
    if ($run1) {
        // code...

        echo "<script>window.location.href='../../../RSMS_project/admin/index.php?status=dashboard';</script>";
    }
}
    

 ?>