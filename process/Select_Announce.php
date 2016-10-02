<?php

$conn_query_a = mysqli_query($connect, "SELECT * FROM `announces` WHERE member_id =  1 ");

$row_a = mysqli_fetch_assoc($conn_query_a);

$introw_a = mysqli_num_rows($conn_query_a);

if ($introw_a == 1) {

	$_SESSION['ann_id'] = $row_a["announce_id"];
	
} else {

}

?>
