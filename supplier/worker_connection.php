<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

$worker_id = $_SESSION['id'];
$worker_name = $_SESSION['name'];
$farmer_id = $_POST['farmer_id'];
$description = $_POST['description'];


//Data base connection...
include '../db_connect.php';
// $conn = new mysqli('172.16.15.7', 'dbms18', 'dbms@18', 'dbms18');
// if ($conn->connect_error) {
//     die('Connection Failed: ' . $conn->connect_error);
// } else {
    $stmt = $connection->prepare("insert into worker_approval(worker_id, worker_name, farmer_id,description) values(?,?,?,?)");
    if (!$stmt) {
        die('Statement preparation failed: ' . $connection->error);
    }
    $stmt->bind_param("ssss",$worker_id, $worker_name,$farmer_id, $description);
    if (!$stmt->execute()) {
        die('Statement execution failed: ' . $stmt->error);
    }
    $stmt->close();
    $connection->close();
    
// }
?>
<script type="text/javascript">
	alert("Submission successfull...!!");
	window.location.href = "view_jobs.php";
</script>