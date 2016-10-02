<?php
session_start();
require ("../config/database.php");
require ("../config/connect.php");

if ($_POST["mode"] == "add_gene") {
	//if (isset($_POST["b"])) {
	$mem_user = $_SESSION['mem_id'];
	// $query = mysqli_query($connect, "UPDATE announces SET car_gene =  2  , passenger = 6
	// , car_year = 2014  WHERE member_id = $mem_user ");

	$query = mysqli_query($connect, "UPDATE announces SET car_gene =  '" . $_POST["g"] . "'  , passenger = '" . $_POST["p"] . "' 
			, car_year = '" . $_POST["y"] . "'  WHERE member_id = $mem_user ");

	if (!$query) {
		//echo "Error: " . $query . "<br>" . $connect -> error;
		$data["error"] = true;
		$data["msg"] = "กรุณากรอกข้อมูลให้ครบ";

	} else {
		$data["error"] = false;
		$data["update"] = "amenities.php";
		//echo "New record created successfully";

		//}

	}
}

echo json_encode($data);

require ("../config/close.php");
?>
