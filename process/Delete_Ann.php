<?php
require ("../config/database.php");
require ("../config/connect.php");

	$query_delete = mysqli_query($connect, "DELETE FROM announces WHERE announce_id = '". $_POST["id"] ."' ");

	if(!$query_delete){
		$data["error"] = true;
		$data["msg"] = "โปรดติดต่อผู้ดูแลระบบ";
	}else{
		$data["error"] = false;
	}
echo json_encode($data);

require ("../config/close.php");
?>