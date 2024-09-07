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
		<h1>Worker Register Page</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form name="myForm" action="register_connection01.php" method="post" enctype="multipart/form-data" onsubmit="return validateform()">
					<input class="text" for="name" type="text" name="name" placeholder="Full Name" required="">
					<input class="text email" for="email" type="email" name="email" placeholder="Email" required="">
					<input class="text" for="password" type="password" name="password" placeholder="Password" required=""><br>
                    <input class="text" for="address" type="text" name="address" placeholder="Address" required=""><br>
					<a class="text" type="text" style="color: white"> Your Phone Number</a><br>
					<input class="text" for="mobile" type="number" name="mobile" placeholder="Contact Number" required=""><br><br>
					<a class="text" style="color: white">Desire Salary</a><br>
					<input class="text" for="salary" type="number" name="salary" placeholder="Expected Salary"  required pattern="[0-9]+"><br><br>
					<a class="text" style="color: white"> Attach your biodata</a>
					<input class="text" for="resume" type="file" name="resume" placeholder="Resume" required=""><br><br>
					<!-- <input class="text" for="work" type=" " name="work" placeholder="Work Profile" required=""><br> -->
					<select name="work" for="work">
                      <option id="work">Select Work Profile</option>
                      <option value="Labour Work">Labour Work</option>
                      <option value="Transportation Work">Transportation Work</option>
                      <option value="Cultivating Work">Cultivating Work</option>
                      <option value="Supervising Work">Supervising Work</option>
                    </select><br><br>
					
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" id="submit" value="Register"  onclick="phonenumber(document.form1.text1)>
				</form>

				<!-- Mailing section -->

<script src="https://smtpjs.com/v3/smtp.js">
</script>

<script>
  const myButton = document.getElementById('submit');
  myButton.onclick = function() {
    let email = document.getElementById("email").value;
    let contact = document.getElementById("contactno").value;
    let query = document.getElementById("queryField").value;



      Email.send({
        Host : "smtp.elasticemail.com",
        Username : "bittusharmashiv@gmail.com",
        Password : "07A427BC205609177B20CBFC4C67719B027D",
        To : email,
        From : "bittusharmashiv@gmail.com",
        Subject : "Krisi Seva Contact You",
        Body : "Dear User," + "<br><br>" + "Thank you for reaching out to Krisi Seva System. We appreciate your interest in our services and we are committed to providing the best possible support to our users." + "<br><br>" + "At Krisi Seva, Our Service center contact you on this number you provided us " + contact + ", We take pride in our responsive customer service and we always strive to provide timely and accurate solutions to our users' queries. We are here to help you and ensure that your experience with our system is a smooth and enjoyable one." + "<br><br>" + "Thank you for choosing Krisi Seva." + "<br><br>" + "Best regards," + "<br><br>" + "The Krisi Seva System Team."
    }).then(
      message => alert(message)
    );

  };

</script>

<!-- End of Mailing Section -->

				
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

