<?php
	session_start();
	#fetch data from database
	// $connection = mysqli_connect("","root","");
	// $db = mysqli_select_db($connection,"aglocalhostri");
  include '../db_connect.php';
	$book_name = "";
	$author = "";
	$book_no = "";
	$student_name = "";
	$query = "select * from crop";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="css/allprojects.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <style>
       
     body{
    background-image: url('https://wallpaperaccess.com/full/2578748.jpg');
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
  color: #030303;
  font-size: 100px;
  margin-left: 550px;
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
    <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

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

<div class="glitch" data-text="GLITCH">Complaint Portal</div> 
    <div class="table table-bordered table-striped table-hover">
        <table id="customers">
            <thead>
                <th>Complaint_ID</th>
                <th>Farmer_Name</th>
                <th>Contact_No</th>
                <th>Email_ID</th>
                <th>Complaint/Request</th>
                <th>Status</th>
            </thead>
            <tbody id="tbody1" class="tableorder">
            <?php
            include '../db_connect.php';
						// $connection = mysqli_connect("localhost","root","");
						// $db = mysqli_select_db($connection,"agri");
						$query = "select * from farmer_contact";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
                <td><?php echo $row['id'];?></td>
								<td><?php echo $row['Name'];?></td>
								<td><?php echo $row['Phone_no'];?></td>
                <td><?php echo $row['email'];?></td>
								<td><?php echo $row['Message'];?></td>
                <td><button class="btn" id="submit" type="submit"><a href="delete_complain.php?bn=<?php echo $row['id'];?>">Approved</a></button></td>
							</tr>
							<?php
						}
			?>
            </tbody>
        </table>
    </div>


     <!-- Mailing section -->

<script src="https://smtpjs.com/v3/smtp.js">
</script>

<script>
  const myButton = document.getElementById('submit');
  myButton.onclick = function() {
    let email = document.getElementById("email").value;
    let contact = document.getElementById("Phone_no").value;
    let query = document.getElementById("Message").value;



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

   
</body>

</html>