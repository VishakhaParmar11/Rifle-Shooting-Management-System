<?php

	session_start();

	include("code_part/connection.php");

	$id=$_GET['id'];

	$sql="DELETE FROM `tbl_awards` WHERE `tbl_awards`.`id` = $id;";

	$qry=mysqli_query($con,$sql)or die("Query Error");
	
	$_SESSION['alert']=1;
	$_SESSION['alert_title']="DELETE";
	echo "<script>window.location.href='manage_award.php';</script>"
?>
 