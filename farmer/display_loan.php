<?php
	require("function.php");
	session_start();
	#fetch data from database
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"agri");
  include '../db_connect.php';
	$farmer_id = "";
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from farmer_register where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$farmer_id = $row['id'];
	}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Farmer Panel - Loan Requests</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  <style>
       
     body{
    background-image: url('https://img.freepik.com/free-photo/flat-lay-jar-with-coins_23-2148543176.jpg?w=1380&t=st=1683568297~exp=1683568897~hmac=d84a255cf9e933d42ea33fd7d7b3022423b678558270e585042c2ecde0315612');
    background-size: cover;
    background-position: 150px -160px;
    
}


#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td {
  border: 1px double #3886d07e;
  padding: 5px;
  width: 350px;
  background-color: whitesmoke;
}

#customers tr:nth-child(){background-color: #04AA6D;}

#customers tr:hover {background-color: #ddd;}

#customers th {
     border: 1px double #ddd;
     width: 100px;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: rgb(255, 255, 255);
}
#tbody1{
  border: 1px double;
  width: 100px;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: black;
  color: rgb(27,18,18);
}
.glitch{
  color: black;
  font-size: 100px;
  margin-left: 0px;
  
  text-shadow:
      0 0 7px #fff,
      0 0 10px #fff,
      0 0 21px #fff,
      0 0 42px #0fa,
      0 0 82px #0fa,
      0 0 92px #0fa,
      0 0 102px #0fa,
      0 0 151px #0fa;
}

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid"> 
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Krishi Seva Management System </a>
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

  <div class="glitch" data-text="GLITCH">Request Portal</div> 
  <div class="table table-bordered table-striped table-hover">
    <div class = "customers">
  <?php
  // Connect to database
  // $conn = mysqli_connect('localhost', 'root', '', 'agri');

  // // Check connection
  // if (!$conn) {
  //   die("Connection failed: " . mysqli_connect_error());
  // }

  // Fetch all loan requests
  $id = $_SESSION['id'];
  $sql = "SELECT * FROM loan_request where farmer_id = '$id'";
  $result = mysqli_query($connection, $sql);

  // Check if any loan requests exist
  if (mysqli_num_rows($result) > 0) {
    // Output table headers
    echo "<table><tr><th>Amount</th><th>Reason</th><th>Repay Date</th><th>Identification Img</th><th>Status</th></tr>";

    // Output table rows for each loan request
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row["amount"] . "</td><td>" . $row["reason"] . "</td><td>" . $row["repay_date"] . "</td><td>" . $row["identification_img"] . "</td><td>" . $row["status"] . "</td></tr>";
    }
    echo "</tbody>";
    // Close table
    echo "</table>";
  } else {
    echo "No loan requests found.";
  }

  // Close database connection
  mysqli_close($connection);
  ?>
  </div>
  </div>
</body>
</html>
