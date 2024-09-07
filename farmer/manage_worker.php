<?php
	//require("function.php");
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"agri");
	$name = "";
    $id="";
	$email = "";
	$mobile = "";
	$query = "select * from farmer_register where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
        $id = $row['id'];
	}
?> 




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Simple Registration Form</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  <style>
    /*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}*/
body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color:#008cba; 
    background-image:url('https://live.staticflickr.com/4385/36859697575_a00e9a5c15_b.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    
}
.container{ 
   margin-top:80px;
   /* margin-left:50px; */
   height:100%;
   display:flex;
   align-items:center;
   justify-content:center;
}
.content{
    
    background-color:white;
    width:500px;
    height:550px;
}
img{
    width: 100%;
    height: 25%;
}
.form-title{
    margin-left: 500px;
    display:inline;
            font-size: 80px;
  color: green;
    
}
form{
    padding:0px 40px;
}
input[type=text], [type=email]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    width:100%;
    margin: 8px 0;
    padding:10px 0;
}
input[type=number]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
}
input :hover {
    background-color: red;
}
select{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
    width:50%;
}
.beside{
    display:flex;  
    justify-content: space-between;
}
button{
    color:#ffffff;
    background-color: #4caf50;
    height:40px;
    width:25%;
    margin-top:15px;
    cursor: pointer;
    border:none;
    border-radius:2%;
    outline:none;
    text-align:center;
    font-size:16px;
    text-decoration:none;
    -webkit-transition-duration:0.4s;
    transition-duration:0.4s;
}
button:hover{
    background-color:#333333;
}
.headingg{
    margin-left:80px;
}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="farmer_dashboard.php">Krishi seva management system</a>
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

<!-- partial:index.partial.html -->
<h1 class="form-title">Hire Worker</h1>
<div class="container">
    <div class="content" style="height:100%">
    <h1 class="headingg">Worker Recuritment</h1>
       <!-- <img src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive"> -->
       <form action="connection.php" method="post">

       <?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"agri");
						$query = "select * from farmer_register where email ='$_SESSION[email]'";
                        
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
                           <input type="text" placeholder="Farmer id" name="farmer_id" required="" value="<?php echo $row['id'];?>" readonly>      
                           <div class="beside">
        <input type="text" placeholder="Farmer name" name="name" required="" value="<?php echo $row['name'];?>" readonly>
    </div>
    <input type="number" placeholder="Farmer contact" name="contact" required="" value="<?php echo $row['mobile'];?>" readonly>
                        <!-- Worker Name:    <input type="text" placeholder="Worker name" name="worker_name" value="<?php echo $row['name'];?>">	 -->
							<?php
						}
					?>


    <!-- <input type="text" placeholder="Farmer id" name="farmer_id" required=""> -->
   
    <select name="work" id="work" required="">
        <option value="">Select Work Profile</option>
        <option value="Labour Work">Labour Work</option>
        <option value="Transportation Work">Transportation Work</option>
        <option value="Cultivating Work">Cultivating Work</option>
        <option value="Supervising Work">Supervising Work</option>
    </select><br><br>
  
    <input type="text" placeholder="WORK ADDRESS" name="address" required="">
    <input type="number" placeholder="Salary" name="salary" required=""><br><br>
    <a>Work From:</a>
    <input type="date" placeholder="From: " name="date_from" required=""><br><br>
    <a>Work Up to:</a>
    <input type="date" placeholder="Up to: " name="date_to" required=""><br>
    <button type="submit">Submit</button>
</form>
        </div>
 </div>
<!-- partial -->
  
</body>
</html>


