
 <?php
	// require("functions.php");
	 session_start();
	// #fetch data from database
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"agri");
	include '../db_connect.php';
    $id="";
	$name = "";
	$email= "";
	$password = "";
	$address = "";
    $contact="";
    $resume="";
    $work="";
    $salary="";
	$query = "select * from worker_register where email='$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
        $id=$row['id'];
		$name = $row['name'];
		$email = $row['email'];
        $address = $row['address'];
		$contact = $row['contact'];
        $resume=$row['resume'];
        $work=$row['work'];
        $salary=$row['salary'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Krishi Seva Management (KSM)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		     
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>This is Krishi Seva Management System.</marquee></span><br><br>
		<center><h4>Edit Profile</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">


			
            <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" class="form-control" value="<?php echo $email;?>" readonly>
  </div>
  <div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="text" name="contact" class="form-control" value="<?php echo $contact;?>" readonly>
  </div>
  <div class="form-group">
    <label for="email">Address:</label>
    <input type="text" name="address" class="form-control" value="<?php echo $address;?>">
  </div>
  <!-- <div class="form-group">
    <label for="email">ID:</label>
    <input type="text" name="id" class="form-control" value="<?php echo $id;?>">
  </div> -->
  <div class="form-group">
    <label for="email">Work:</label>
    <input type="text" name="work" class="form-control" value="<?php echo $work;?>">
  </div>
  <div class="form-group">
    <label for="email">Salary:</label>
    <input type="text" name="salary" class="form-control" value="<?php echo $salary;?>">
  </div>
  <div class="form-group">
    <label for="resume">Resume:</label>
    <?php if (!empty($resume)) { ?>
      <td><a href="<?php echo $resume; ?>" target="_gokul">Current Resume File</a></td>
    <?php } ?>
    <input type="file" name="resume" class="form-control">
  </div>
  <button type="submit" name="update" class="btn btn-primary">Update Profile</button>
</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>



<?php
	if(isset($_POST['update'])){
		// $connection = mysqli_connect("localhost","root","");
		// $db = mysqli_select_db($connection,"agri");
		$id = $_SESSION['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$work = $_POST['work'];
		$salary = $_POST['salary'];
		
		// Check if a new file has been uploaded
		if ($_FILES["resume"]["error"] == UPLOAD_ERR_NO_FILE) {
			// No file was selected, fetch the existing file path from the database
			$query = "SELECT resume FROM worker_register WHERE id='$id'";
			$query_run = mysqli_query($connection,$query);
			$row = mysqli_fetch_assoc($query_run);
			$resume = $row['resume'];
		} else {
			// Handle file upload
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["resume"]["name"]);
			$uploadOk = 1;
			$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			// Check if file already exists
			if (file_exists($target_file)) {
			  echo "Sorry, file already exists.";
			  $uploadOk = 0;
			}
			
			// Allow certain file formats
			if($fileType != "pdf" && $fileType != "doc" && $fileType != "docx") {
			  echo "Sorry, only PDF, DOC, & DOCX files are allowed.";
			  $uploadOk = 0;
			}
			
			if ($uploadOk == 0) {
			  echo "Sorry, your file was not uploaded.";
			} else {
			  if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
				$resume = $target_file;
			  } else {
				echo "Sorry, there was an error uploading your file.";
				$resume = ""; // Set resume to empty string to avoid updating the database with an invalid file path
			  }
			}
		}
		
		$query = "UPDATE worker_register SET name='$name', email='$email', contact='$contact', address='$address', work='$work', salary='$salary', resume='$resume' WHERE id='$id'";
	
		$query_run = mysqli_query($connection,$query);
		if($query_run){
			echo '<script>alert("Profile updated successfully!");</script>';
			header("Location: supply_dashboard.php");
		}else{
			echo '<script>alert("Profile update failed. Please try again.");</script>';
		}
	}
	
?>

