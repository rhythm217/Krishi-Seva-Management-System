<?php
	$connection = mysqli_connect("localhost", "root", "", "agri");
	if(isset($_GET['bn'])) {
		$sr_no = mysqli_real_escape_string($connection, $_GET['bn']);
		$query = "DELETE FROM worker_approval WHERE Sr_no. = '$sr_no'";
		$query_run = mysqli_query($connection, $query);
		if($query_run) {
			echo "<script>alert('Worker deleted successfully.')</script>";
			echo "<script>window.location.href='hiring.php'</script>";
		} else {
			echo "<script>alert('Failed to delete worker.')</script>";
			echo "<script>window.location.href='hiring.php'</script>";
		}
	}
?>