<?php
if (isset($_SESSION['login'])) {

	$query_province = mysqli_query($connect, "SELECT * FROM province");

	

} else {
	al('not login');
}

function al($msg) {
	echo "<script type=\"text/javascript\">console.log('$msg') </script>";
}
?>