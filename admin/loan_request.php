
<?php
	session_start();
	#fetch data from database
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
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Simple Registration Form</title>
  <link rel="stylesheet" href="./style.css">
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
<!-- partial:index.partial.html -->
<h1 class="form-title">Apply for this job</h1>
<div class="container">
    <div class="content">
    <h1 class="headingg">Enter your details</h1>
       <!-- <img src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive"> -->
       <form action="worker_connection.php" method="post">
       
                     <?php
						// $connection = mysqli_connect("localhost","root","");
						// $db = mysqli_select_db($connection,"agri");
						$query = "select * from worker_register where email ='$_SESSION[email]'";
                        
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
                         Worker id:       <input type="text" placeholder="Worker id" name="worker_id" value="<?php echo $row['id'];?>">        
                        Worker Name:    <input type="text" placeholder="Worker name" name="worker_name" value="<?php echo $row['name'];?>">	
							<?php
						}
					?>
     Farmer id:
     <!-- <br> -->
    <input type="text" placeholder="Farmer id" name="farmer_id" value="<?php
    $var_value = $_GET['varname'];
    echo $var_value;
    ?>"> 
    Description
    <input type="text" placeholder="Description" name="description" required="">
    <button type="submit">Submit</button>
</form>
        </div>
 </div>
<!-- partial -->
  
</body>
</html>


