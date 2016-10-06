<?php
session_start();
require ("../config/database.php");
require ("../config/connect.php");

if ($_POST["mode"] == "edit") {

	//$mem_user = $_SESSION['mem_id'];

	$query = mysqli_query($connect, "UPDATE `booking` SET status =  '" . $_POST["status"] . "'   
			WHERE booking_id = '" . $_POST["id"] . "' 
			");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "เกิดความผิดพลาดกรุณาติดต่อผู้ดูแลระบบ";

	} else {
		$data["error"] = false;
		//$data["update"] = "booking.php";

	}
}

echo json_encode($data);

require ("../config/close.php");
?>
