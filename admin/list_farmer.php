<?php
	//require("function.php");
	session_start();
	#fetch data from database
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"agri");
	include '../db_connect.php';
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from farmer_register where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?> 
<style>
    #My_Heading {
   color: purple;
   font-size:120%;
	}
	body {
  background-image: url('https://thumbs.dreamstime.com/b/empty-wooden-photo-frame-farm-background-empty-wooden-photo-frame-paddy-farm-background-111650526.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}
td, th {
    border: 1px solid #777;
    padding: 0.5rem;
    text-align: center;
}
 
table {
    border-collapse: collapse;
}
thead{
	background: white;
}
tbody tr:nth-child(odd) {
    background: #eee;
}
tbody tr:nth-child(even) {
    background: white;
}
caption {
    font-size: 0.8rem;
}
	</style>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Scheme</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			alert(Scheme added successfully...);
  			window.location.href = "manage_schemes.php";
  		}
  	</script>
</head>
<body background="../image/B5.jpg">
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
	
	<span id="My_Heading"><marquee>This is Krishi seva management system. </marquee></span><br><br>
		<center><h1>Manage Farmer</h1><br></center>
		<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        
	<table id="My_Heading" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Farmer_ID</th>
				<th>Farmer_Name</th>
                <th>Category</th>
                <th>Farmer_Email_ID</th>
                <th>Farmer_Contact</th>
                <th>Farmer_Address</th>
				<th>Action</th>
            </tr>
        </thead>
        <?php
            $connection = mysqli_connect("localhost","root","","agri");
            $query = "SELECT * FROM farmer_register";
            $query_run = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($query_run)){
        ?>


            <tr>
			    <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><?php echo $row['email'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><button class="btn" id="submit" type="submit"><a href="delete_farmer.php?bn=<?php echo $row['id'];?>">Remove</a></button></td>
            </tr>
        <?php
            }
            mysqli_close($connection);
        ?>
    </table>
        
    </div>
</div>

			<div class="col-md-2"></div>
		</div>
</body>
</html>
