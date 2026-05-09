<?php 
	session_start();

	if(isset($_SESSION['role']))
	{
		if($_SESSION['role']=='user')
		{
			header("location:../user/user.php");
		}
	}
	else
	{
		header("location:../login.php");
	}
	echo "Welcome to ".$_SESSION['name'];
	
	echo "<a href='admin.php'></br>Home</a></br>";
	echo "<a href='logout.php'>Logout</a></br>";

	echo "<a href='changpass.php'>Change Password</a>";
?>