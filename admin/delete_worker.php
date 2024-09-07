<?php
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"agri");
	include '../db_connect.php';
	$query = "delete from worker_register where id  = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Worker Remove successfully from database...");
	window.location.href = "list_worker.php";
</script>