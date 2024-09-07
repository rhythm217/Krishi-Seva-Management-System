<?php
	//require("function.php");
	session_start();
	#fetch data from database
	include '../db_connect.php';
	// $connection = mysqli_connect("","root","");
	// $db = mysqli_select_db($connection,"agrlocalhosti");
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

<!DOCTYPE html>
<html>
<head>
	<title>Loan Requests</title>
  <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>

<style>
	body{
		background-image:url('https://img.freepik.com/free-vector/money-pattern-background-wallpaper-vector-finance-illustration_53876-140179.jpg?w=1060&t=st=1683566783~exp=1683567383~hmac=634d1ed560c1f62427e87e6184f68ef1073ea509d968f248ff76f17b1b10ff6d');
		background-size:cover;
		background-repeat:none;
	}
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  th {
    background-color: #007bff;
    color: white;
  }

  tr {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #ddd;
  }

  select {
    font-size: 16px;
    padding: 4px 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  button[type="submit"] {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 8px;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: #0069d9;
  }

  img {
    max-width: 100%;
    height: auto;
  }
</style>
<body>

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

	<?php
	// Connect to database
	// $conn = mysqli_connect('localhost', 'root', '', 'agri');

	// // Check connection
	// if (!$conn) {
	// 	die("Connection failed: " . mysqli_connect_error());
	// }

	// Get all pending loan requests
	$sql = "SELECT * FROM loan_request WHERE status='Pending'";
	$result = mysqli_query($connection, $sql);

	if (mysqli_num_rows($result) > 0) {
		// Display loan requests in a table
		echo "<table>";
		echo "<tr><th>Farmer ID</th><th>Amount</th><th>Reason</th><th>Repayment Date</th><th>Identification</th><th>Status</th><th>Action</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
			<td><?php echo $row['farmer_id'] ?></td>
			<td><?php echo $row['amount'] ?></td>
			<td><?php echo $row['reason'] ?></td>
			<td><?php echo $row['repay_date'] ?></td>
			<td><img src='../farmer/uploads/<?php echo $row['identification_img'] ?>' style="height:100px;width:100px;"></td>
			<!-- // Display status and action buttons -->
			<td><?php echo $row['status'] ?></td>
			<td>
			<form action='loan_action.php' method='post'>
			<input type='hidden' name='id' value='<?php echo $row['id'] ?>'>
			<select name='action'>
			<option value='approve'>Approve</option>
			<option value='deny'>Deny</option>
			</select>
			<button type='submit'>Submit</button>
			</form>
			</td>
			</tr>
		<?php }
		echo "</table>";
	} else {
		echo "<h1><center>No pending loan requests.</center></h1>";
	}

	// Close database connection
	mysqli_close($connection);
?>

  <a href="view_loan.php"> <h3><center>List of all applied Loan</center></h3></a>
</body>
</html>
