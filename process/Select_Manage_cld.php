<?php

$conn_query_a = mysqli_query($connect, "SELECT * FROM `manage-cld` WHERE announce_id =  $ann_id ");

	$row_a = mysqli_fetch_assoc($conn_query_a);

	$introw_a = mysqli_num_rows($conn_query_a);

	if ($introw_a > 0) {
		$_SESSION['ann_id_check'] = $row_a["announce_id"];

	} else {
		$_SESSION['ann_id_check'] = "";
	}
?>
