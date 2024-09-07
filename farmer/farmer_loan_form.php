
<?php
	require("function.php");
	session_start();
	#fetch data from database
    include '../db_connect.php';
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"agri");
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
	<style>
		body{
			background: linear-gradient(135deg, #71B7E6, #9B59B6);
		}
		.wrapper{
    max-width: 400px;
    width: 100%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
	margin-left: 550px;
	margin-top: 100px;
}
.wrapper .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}
.wrapper .title::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 40px;
    background: linear-gradient(135deg, #71B7E6, #9B59B6);
}
.wrapper form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
}
.user-details .input-box input{
    height: 45px;
    width: 100%;
}
.user-details .input-box .details{
    font-weight: 500;
    display: block;
    margin-bottom: 5px;
}

.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all .3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #9B59B6;
}

form .gender-details .gender-title{
    font-size: 20px;
    font-weight: 500;
}

.gender-details .category{
    display: flex;
    width: 80%;
    margin: 14px 0;
    justify-content: space-between;
}
.gender-details .category label{
    display: flex;
    align-items: center;
}
.gender-details .category .dot{
    height: 18px;
    width: 18px;
    border-radius: 50%;
    margin-right: 10px;
    background: #D9D9D9;
    border: 5px solid transparent;
}
#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{
    border-color: #D9D9D9;
    background: #9B59B6;
}
form input[type="radio"]{
    display: none;
}

form .button{
    height: 45px;
    margin: 45px 0;
}
form .button input{
    height: 100%;
    width: 100%;
    color: #fff;
    outline: none;
    border: none;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #71B7E6, #9B59B6);
}
form .button input:hover{
    background: linear-gradient(-135deg, #71B7E6, #9B59B6);
}

/* Media Query */
@media (max-width: 584px) {
    .wrapper{
        max-width: 100%;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
    }
    .gender-details .category{
        width: 100%;
    }
    .wrapper form .user-details{
        max-height: 300px;
        overflow-y: scroll;
    }
    .user-details::-webkit-scrollbar{
        width: 0;
    }
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
    <!-- farmer_loan_form.php -->
<div class="wrapper">
	<div class="title">Loan Request</div>
<form action="loan_request.php" method="post" enctype="multipart/form-data">
		<div class="input-box">
  <label for="amount"  class="details">Loan Amount:</label>
  <input type="number" name="amount" id="amount" required>
</div>
<div class="input-box">
  <label for="reason"  class="details">Reason for Loan:</label>
  <textarea name="reason" id="reason" required></textarea>
</div>
<div class="input-box">
  <label for="repay_date"  class="details">Repayment Date:</label>
  <input type="date" name="repay_date" id="repay_date" required>
</div>
<div class="input-box">
  <label for="identification"  class="details">Identification Image:</label>
  <input type="file" name="identification" id="identification" accept="image/*" required>
</div>
<div class="input-box">
  <button  type="submit" class="button">Submit Loan Request</button>
</div>
</form>
<div class="input-box">
  <a href="display_loan.php" class="button"> Show My Loan Status </a>
</div>
</div>
</body>
</html>