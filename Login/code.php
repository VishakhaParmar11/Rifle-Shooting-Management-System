<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AKS Academy</title>
</head>
<body>

</body>
</html>
<?php
	session_start();

	try {
		$con=mysqli_connect("localhost","root","","rsams_db");
	} 
	catch (Exception $e) 
	{
		echo $e->getMessage();	
	}
	$email=$_POST['email'];
	$password=$_POST['pass'];
	
	$sql="SELECT * FROM `tbl_registration` where email='$email' and password='$password';";

	$qry=mysqli_query($con,$sql)or die("Query Error");

	$num=mysqli_num_rows($qry);

	$row=mysqli_fetch_assoc($qry);

	//echo "hello";

	if($num>0)
	{
		if($row['role']=="admin")
		{
			$_SESSION['id']=$row['id'];
			$_SESSION['email']=$row['email'];
			$_SESSION['role']=$row['role'];
			$_SESSION['name']=$row['username'];
						$_SESSION['password']=$row['password'];
			echo "<script>alert('admin');</script>";
			header("location:../../../../RSMS_project/admin/index.php?status=dashboard");
		}
		else if($row['role']=="user")
		{
			$_SESSION['id']=$row['id'];
			$_SESSION['email']=$row['email'];
			$_SESSION['role']=$row['role'];
			$_SESSION['username']=$row['username'];
									$_SESSION['password']=$row['password'];
			echo "<script>alert('user');</script>";
			header("location:../../../../../../RSMS_project/index.php");

		}
	}
	else
	{
		//echo "<script>alert('error');</script>";
		echo "<script>alert('Email and Password are not match');</script>";
		echo "<script>window.location='login.php';</script>";
	}
?>
