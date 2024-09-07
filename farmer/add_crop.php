<?php
	require("function.php");
	session_start();
	#fetch data from database
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"agri");
	include '../db_connect.php';
	$id = "";
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from farmer_register where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
        $id = $row['id'];
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New CROP</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			alert(Book added successfully...);
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
	<style>



/* Position text in the middle of the page/image */
		body {
  background-image: url('https://thumbs.dreamstime.com/b/wheat-ears-border-burlap-background-old-42582235.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}

		.showlist{
			background-color: blue; /* Green */
  color: white;
  /* padding: 15px 32px; */
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  float: right;
   
		}
    #My_Heading {
   color: purple;
   font-size:120%;
	}
	.btn-3 {
  background: rgb(0,172,238);
background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
  border: none;
  float: right;
  margin-right: 100px;
  
}
.btn-3 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-3:before,
.btn-3:after {
  position: absolute;
  content: "";
  right: 0;
  top: 0;
   background: rgba(2,126,251,1);
  transition: all 0.3s ease;
}
.btn-3:before {
  height: 0%;
  width: 2px;
}
.btn-3:after {
  width: 0%;
  height: 2px;
}
.btn-3:hover{
   background: transparent;
  box-shadow: none;
}
.btn-3:hover:before {
  height: 100%;
}
.btn-3:hover:after {
  width: 100%;
}
.btn-3 span:hover{
   color: rgba(2,126,251,1);
}
.btn-3 span:before,
.btn-3 span:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
   background: rgba(2,126,251,1);
  transition: all 0.3s ease;
}
.btn-3 span:before {
  width: 2px;
  height: 0%;
}
.btn-3 span:after {
  width: 0%;
  height: 2px;
}
.btn-3 span:hover:before {
  height: 100%;
}
.btn-3 span:hover:after {
  width: 100%;
}
	</style>
</head>
<body>

<!-- <body background="../image/B5.jpg"> -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Krishi seva management system</a>
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
	
	<span id="My_Heading"><marquee>This is krishi seva management system </marquee></span><br><br>
		<center><h4 id="My_Heading">Add a new Crop</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div id="My_Heading" class="form-group">
						<label for="email" >Crop Name:</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div id="My_Heading" class="form-group">
						<label for="mobile">Crop Quantity:</label>
						<input type="text" name="quantity" class="form-control" required>
					</div>
					<div id="My_Heading" class="form-group">
						<label for="mobile">Enter the life of Crop(Day's)</label>
						<input type="text" name="day" class="form-control" required>
					</div>
                    <div id="My_Heading" class="form-group">
						<label for="mobile">Enter Crop_ID</label>
						<input type="text" name="crop_id" class="form-control" required>
					</div>
					<div id="My_Heading" class="form-group">
						<label for="mobile">Enter Farmer_ID</label>
						<input type="text" name="farmer_id" class="form-control" required>
					</div>
					<!-- btn btn-primary -->
					<button type="submit" name="add_book" class="custom-btn btn-3" >Add Crop</button>
				</form>
				
				<a href="manage_crop.php">
				<button class="custom-btn btn-3"><span>Show Crop</span></button></a>
					
			</div>
			<div class="col-md-4"></div>
		</div>
		
</body>
</html>

<?php
	if(isset($_POST['add_book']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"agri");
		$query = "insert into crop values('$_POST[crop_id]','$_POST[name]','$_POST[quantity]','$_POST[day]','$id')";
		$query_run = mysqli_query($connection,$query);
		#header("location:add_book.php");
	}
?>
