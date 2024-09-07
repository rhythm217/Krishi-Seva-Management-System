<?php
	function get_crop_count(){
		include '../db_connect.php';
		// $connection = mysqli_connect("localhost","root","");
		// $db = mysqli_select_db($connection,"agri");
		$crop_count = 0;
		$query = "select count(*) as crop_count from crop";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$crop_count = $row['crop_count'];
		}
		return($crop_count);
	}
?>