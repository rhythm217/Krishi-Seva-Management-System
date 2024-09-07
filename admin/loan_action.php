<!-- loan_action.php -->

<?php
// Connect to database
// $conn = mysqli_connect('localhost', 'root', '', 'agri');

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
include '../db_connect.php';

// Get form data
$id = $_POST['id'];
$action = $_POST['action'];

// Update loan request status in database
if ($action == 'approve') {
  $status = 'Approved';
} else {
  $status = 'Denied';
}

$sql = "UPDATE loan_request SET status='$status' WHERE id=$id";

if (mysqli_query($connection, $sql)) {
  echo "<script type='text/javascript'>
	alert('Submission successfull...!!');
	window.location.href = 'admin_loan_requests.php';
</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Close database connection
mysqli_close($connection);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      background-image:url('https://thumbs.dreamstime.com/b/submitted-red-rubber-stamp-over-white-background-179538280.jpg');
    }
  </style>
</head>
<body>
  
</body>
</html> -->

