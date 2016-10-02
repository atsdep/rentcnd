<?php
require ("../config/database.php");
require ("../config/connect.php");

$query = mysqli_query($connect, "INSERT INTO members(mem_name,mem_surname,mem_email,mem_pw)
	values('" . $_POST["n"] . "', '" . $_POST["s"] . "','" . $_POST["e"] . "','" . $_POST["p"] . "');
	");

if (!$query) {
	//echo "Error: " . $query . "<br>" . $connect -> error;
	$data["error"] = true;
	$data["msg"] = "โปรดติดต่อผู้ดูแลระบบ";

} else {
	$data["error"] = false;
	//$data["afterregis"] = "index.php";
	//echo "New record created successfully";

}

echo json_encode($data);

require ("../config/close.php");
?>
