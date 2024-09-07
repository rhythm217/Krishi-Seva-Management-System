<?php
	// require("functions.php");
	session_start();
	#fetch data from database
	include '../db_connect.php';
	// $connection = mysqli_connect("172.16.15.7","dbms18","dbms@18");
	// // $conn = new mysqli('172.16.15.7', 'dbms18', 'dbms@18', 'dbms18');
	// $db = mysqli_select_db($connection,"dbms18");
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
				<a class="navbar-brand" href="admin_dashboard.php">Krishi Seva </a>
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
		<center><h4>Admin Profile Detail</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				
			<form action="update.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name;?>" readonly>
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
    <input type="text" name="address" class="form-control" value="<?php echo $address;?>" readonly>
  </div>
  <div class="form-group">
    <label for="email">ID:</label>
    <input type="text" name="id" class="form-control" value="<?php echo $id;?>" readonly>
  </div>
  <div class="form-group">
    <label for="email">Work:</label>
    <input type="text" name="work" class="form-control" value="<?php echo $work;?>" readonly>
  </div>
  <div class="form-group">
    <label for="email">Salary:</label>
    <input type="text" name="salary" class="form-control" value="<?php echo $salary;?>" readonly>
  </div>
  <div class="form-group">
    <label for="resume">Resume:</label>
    <input type="text" name="resume" class="form-control" value="<?php echo $resume;?>" readonly>
    <?php if (!empty($resume)) { ?>
      <td><a href="<?php echo $resume; ?>" target="_gokul">Download PDF Now</a></td>
    <?php } ?>
  </div>
  <a href="update_worker.php" class="btn btn-primary">Click To Update Profile</a>
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
		$query = "update worker_register set name = '$_POST[name]',contact = $_POST[contact],salary = $_POST[salary],work = $_POST[work],address = $_POST[address] ,resume = $_POST[resume]  where id = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		header("location:supply_dashboard.php");
	}
?>
