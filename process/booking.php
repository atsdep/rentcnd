<?php
session_start();
require ("../config/database.php");
require ("../config/connect.php");

if ($_POST["mode"] == "booking") {

	$mem_user = $_SESSION['mem_id'];

	
	$date1 = $_POST["f"];
	$date2 = $_POST["t"];
	$from = preg_replace('#(\d{2})/(\d{2})/(\d{4})#', '$3-$1-$2',$date1);
	$to = preg_replace('#(\d{2})/(\d{2})/(\d{4})#', '$3-$1-$2', $date2);

	$query = mysqli_query($connect, "INSERT INTO `booking` (`announce_id`
				, `member_id`
				, `check_in`
				, `check_out`
				, `destination`
				, `total_price`
				, `passenger`) 
				VALUES ('" . $_POST["id"] . "'
				, $mem_user
				, '$from'
				, '$to'
				, '1'
				, '" . $_POST["p"] . "'
				, '" . $_POST["pa"] . "'
				);
 				");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "กรุณากรอกข้อมูลให้ครบ";

	} else {
		$data["error"] = false;
		$data["update"] = "index.php";

	}
}
echo json_encode($data);

require ("../config/close.php");
?>