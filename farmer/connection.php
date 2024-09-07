<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$farmer_id = $_POST['farmer_id'];
$name = $_POST['name'];
$work = $_POST['work'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];

//Data base connection...
include '../db_connect.php';
// $conn = new mysqli('localhost', 'root', '', 'agri');
// if ($conn->connect_error) {
//     die('Connection Failed: ' . $conn->connect_error);
// } else {
    $stmt = $connection->prepare("insert into worker_request(farmer_id, name, work, contact, address, salary, date_from, date_to) values(?,?,?,?,?,?,?,?)");
    if (!$stmt) {
        die('Statement preparation failed: ' . $connection->error);
    }
    $stmt->bind_param("ssssssss", $farmer_id, $name, $work, $contact, $address, $salary, $date_from, $date_to);
    if (!$stmt->execute()) {
        die('Statement execution failed: ' . $stmt->error);
    }
    $stmt->close();
    $connection->close();
    

?>
<script type="text/javascript">
	alert("Submission successfull...!!");
	window.location.href = "manage_worker.php";
</script>