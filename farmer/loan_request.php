<!-- loan_request.php -->

<?php
// Connect to database
session_start();
// $conn = mysqli_connect('localhost', 'root', '', 'agri');

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
include '../db_connect.php';

// Get form data
$id = $_SESSION['id'];
$amount = $_POST['amount'];
$reason = $_POST['reason'];
$repay_date = $_POST['repay_date'];
$identification = $_FILES['identification']['name'];
$tmp_name = $_FILES['identification']['tmp_name'];

// Move uploaded file to a designated folder
$upload_dir = 'uploads/';
$upload_file = $upload_dir . basename($identification);

if (move_uploaded_file($tmp_name, $upload_file)) {
  // Insert loan request into database
  $sql = "INSERT INTO loan_request (amount, reason, repay_date, identification_img, status,farmer_id)
          VALUES ('$amount', '$reason', '$repay_date', '$identification', 'Pending', '$id')";

  if (mysqli_query($connection, $sql)) {
    echo "<script type='text/javascript'>
	alert('Loan request submit successfull...!!');
	window.location.href = 'farmer_loan_form.php';
</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
} else {
  echo "Error uploading file.";
}

// Close database connection
mysqli_close($connection);
?>
