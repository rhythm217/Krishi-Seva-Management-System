<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="CSS/style_02.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script> 
function validateform()
{
	let x = document.forms["myForm"]["mobile"].value;
  if (x.length!=10) {
    alert("Number must be valid");
    return false;
  }

  let z = document.forms["myForm"]["password"].value;
  if (z.length<5) {
    alert("Password should be of atleast length 5");
    return false;
  }
}
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Krishi Seva Management System</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="Sevices/aboutus.php"></span>About Us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="register.php">Register</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Farmer Register Page</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form name="myForm" action="register_connection.php" method="post" onsubmit="return validateform()">
					<input class="text" id="name" for="name" type="text" name="name" placeholder="Full Name" required="">
                    <input class="text email" type="text" for="category" name="category" value="Farmer" required="">
					<input class="text email" id="email" for="email" type="email" name="email" placeholder="Email" required="">
					<input class="text" for="password" type="password" name="password" placeholder="Password" required=""><br>
                    <input class="text" id="mobile" for="mobile" type="text" name="mobile" placeholder="Mobile No" required=""><br>
                    <input class="text" id="address" for="address" type="text" name="address" placeholder="Address" required=""><br>
					
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" href="index.php" id="submit" value="Register"  onclick="phonenumber(document.form1.text1)"/>
				</form>
				
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2023 Batch. All rights reserved | Design by IIIT Allahabad<a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>


