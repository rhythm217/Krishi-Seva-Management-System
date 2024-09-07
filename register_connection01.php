<?php

// Establish a connection to the database
// $servername = "localhost"; // Replace with your server name
// $username = "root"; // Replace with your database username
// $password = ""; // Replace with your database password
// $dbname = "agri"; // Replace with your database name

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
include 'db_connect.php';

// Process the form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];
  $resume = $_FILES['resume']['name'];
  $work = $_POST['work'];
  $salary = $_POST['salary'];

  // Check if the email or mobile number already exists in the database
$check_sql = "SELECT * FROM worker_register WHERE email = '$email' OR contact = '$mobile'";
$result = mysqli_query($connection, $check_sql);

if ($result === false) {
  echo "Error: " . $check_sql . "<br>" . mysqli_error($connection);
} elseif (mysqli_num_rows($result) > 0) {
  echo "Error: The email or mobile number is already registered.";
} else{

  // Upload the resume file to the server
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["resume"]["name"]);
  move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file);

  // Insert the data into the database
  $sql = "INSERT INTO worker_register (name, email, password, address, contact, resume, work, salary)
          VALUES ('$name', '$email', '$password', '$address', '$mobile', '$resume', '$work', '$salary')";

  if (mysqli_query($connection, $sql)) {
    echo "Data uploaded successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
}
}

mysqli_close($connection);

?>

<!-- <script type="text/javascript">
	alert("Submission successfull...!!");
	window.location.href = "index.php";
</script> -->
