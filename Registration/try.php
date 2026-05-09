<?php 	

$con=mysqli_connect("localhost","root","","rsams_db")or die("Database Connection Error");



$sql="INSERT INTO `tbl_registration` (`id`, `username`, `gender`, `dob`, `photo`, `address`, `phone_no`, `email`, `height`, `weight`, `age`, `gun_selection`, `hand_selection`, `fees`, `password`, `card_holder`, `cvc`, `expiery_date`, `otp`, `status`) VALUES (NULL, 'hetal', 'female', '2023-09-01', 'fd', 'palitana', '0000000000', 'hetu@gmail.com', '5', '45', '20', 'walther', 'righty', '35000', '12345', 'hetal', '1', '2023-09-27', '364270', '1');";
				$qry=mysqli_query($con,$sql);
				if($qry)
				{
					echo "<script>alert('Record Insert Successfully');</script>";
				}
				else
				{
					echo "<script>alert('File Not Upload Successfully');</script>";
				}

 ?>