<?php
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"agri");
	include '../db_connect.php';
	$query = "delete from crop where crop_id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Crop Deleted successfully...");
	window.location.href = "manage_crop.php";
</script>