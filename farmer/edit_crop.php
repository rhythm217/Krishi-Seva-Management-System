<?php
	session_start();
	#fetch data from database
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"agri");
	include '../db_connect.php';
	$book_name = "";
	$book_no = "";
	$author_id = "";
	$cat_id = "";
	$book_price = "";
    $query = "select * from crop where crop_id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
        $crop_id = $row['crop_id'];
		$name = $row['name'];
		$quantity = $row['quantity'];
		$date = $row['day'];
	
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
				<a class="navbar-brand" href="admin_dashboard.php">Krishi Seva Management System</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="#">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>Welcome to Krishi seva management System</marquee></span><br><br>
		<center><h4>Edit Book</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="mobile">Crop Quantity:</label>
						<input type="text" name="quantity" value="<?php echo $quantity;?>" class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="email">Crop Name:</label>
						<input type="text" name="name" value="<?php echo $name;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Enter the life of Crop(Day's)</label>
						<input type="text" name="day" value="<?php echo $date;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Enter Crop_ID</label>
						<input type="text" name="crop_id" value="<?php echo $crop_id;?>" class="form-control" required>
					</div>
				
					<button type="submit" name="update" class="btn btn-primary">Update Crop</button>
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
		include '../db_connect.php';
		$query = "update crop set name = '$_POST[name]',quantity = $_POST[quantity],day = $_POST[day] where crop_id = $_GET[bn]";;
		$query_run = mysqli_query($connection,$query);
		header("location:manage_crop.php");
	}
?>