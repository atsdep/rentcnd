<?php

require ("../config/database.php");
require ("../config/connect.php");

$conn_query_a = mysqli_query($connect, "SELECT * FROM members WHERE mem_email = '" . $_POST["e"] . "' AND mem_pw = '" . $_POST["p"] . "' ");

$row_a = mysqli_fetch_assoc($conn_query_a);

$introw_a = mysqli_num_rows($conn_query_a);

if ($introw_a == 1) {
	$data["error"] = false;
	$data["msg"] = $row_a["mem_name"];
	
} else {
	$data["error"] = true;
	$data["msg"] = "อีเมล์หรือรหัสผ่านของคุณไม่ถูกต้อง";
}


echo json_encode($data);
require ("../config/close.php");
?>
