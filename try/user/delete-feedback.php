<?php

	include("code_part/connection.php");

	$id=$_GET['id'];

	$sql="DELETE FROM `tbl_feedback` WHERE `tbl_feedback`.`id` = $id;";

	$qry=mysqli_query($con,$sql)or die("Query Error");
	
	echo "<script>alert('Delete Record Successfully');</script>;";
	echo "<script>window.location.href='feedback.php';</script>";
?>