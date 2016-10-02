<?php
if (isset($_SESSION['login'])) {

	$query_brand = mysqli_query($connect, "SELECT * FROM car_brand");

	

} else {
	al('not login');
}

function al($msg) {
	echo "<script type=\"text/javascript\">console.log('$msg') </script>";
}
?>