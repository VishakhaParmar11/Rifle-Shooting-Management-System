<?php 
	include "inc/header.php"; 
	include "classes/Student.php"; 
	$stu = new Student();
?>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$insertdata = $stu->insertStudent($name, $roll);
	}
?>

	<div class="container">
<?php
	if (isset($insertdata)) {
		echo $insertdata;
	}
?>
		<div class="card">
			<div class="card-header">
				<h2>
					<a class="btn btn-success" href="add.php">Add Shooter</a>
					<a class="btn btn-info float-right" href="index.php">Back</a>
				</h2>
			</div>

			<div class="card-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Shooter Name</label>
						<input type="text" class="form-control" name="name" id="name" required="">
					</div>

					<div class="form-group">
						<label for="roll">Shooter Roll_no</label>
						<input type="text" class="form-control" name="roll" id="roll" required="">
					</div>

					<div class="form-group text-center">
						<input type="submit" name="submit" class="btn btn-primary px-5" id="roll" value="Add" style="background-color:#06A3DA;">
					</div>
				</form>
			</div>
		</div>
	</div>
