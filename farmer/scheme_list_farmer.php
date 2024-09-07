<!-- <?php
	//require("function.php");
	session_start();
	#fetch data from database
	// $connection = mysqli_connect("","root","");
	// $db = mysqli_select_db($connection,localhost"agri");
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
?> -->
<style>
    #My_Heading {
   color: purple;
   font-size:120%;
	}
	body {
  /* background-image: url('https://thumbs.dreamstime.com/b/wheat-ears-border-burlap-background-old-42582235.jpg'); */
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

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
		<center><h4  id="My_Heading">Manage Schemes</h4><br></center>
		<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        
    <table id="My_Heading" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Scheme_ID</th>
                <th>Scheme_Name</th>
                <th>Details</th>
                <th>Publish_Date</th>
                <th>Image</th>
            </tr>
        </thead>
        <?php
            $connection = mysqli_connect("localhost","root","","agri");
			// include '../db_connect.php';
            $query = "SELECT * FROM scheme";
            $query_run = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($query_run)){
        ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
				<!-- <td>< a href="./upload/<?php echo  $row['doc']; ?>" target="_gokul">Download PDF Now</a></td> -->
				<td><a href="../upload/<?php echo  $row['doc']; ?>" target="_gokul">Download PDF Now</a></td>
                <td><?php echo $row['date'];?></td>
                <td><img src="../upload/<?php echo $row['image'];?>" width="25"></td>
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
