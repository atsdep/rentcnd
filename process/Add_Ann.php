<?php
session_start();
require ("../config/database.php");
require ("../config/connect.php");

if (isset($_SESSION['mem_id'])) {
	$mem_user = $_SESSION['mem_id'];

	if ($_GET["mode"] == 1) {

		//Check Ann
		$conn_query_a = mysqli_query($connect, "SELECT * FROM announces WHERE member_id = $mem_user");

		$row_a = mysqli_fetch_assoc($conn_query_a);

		$introw_a = mysqli_num_rows($conn_query_a);

		if ($introw_a == 1) {
			$_SESSION['ann_id'] = $row_a["announce_id"];
			header("location:../new.php");

		} else {
			echo "No have announce";
		}

		if (!isset($_SESSION['ann_id'])) {
			//Add Ann
			$query = mysqli_query($connect, "INSERT INTO announces(member_id)values($mem_user)");

			if (!$query) {
				echo "Error: " . $query . "<br>" . $connect -> error;

			} else {

				echo "New record created successfully";
				header("location:../new.php");

			}

		}
	}// mode 1 start.php

} else {
	header("location:../index.php");
}
echo json_encode($data);
require ("../config/close.php");
?>
