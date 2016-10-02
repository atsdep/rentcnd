<?php
session_start();
require ("../config/database.php");
require ("../config/connect.php");
if (isset($_SESSION['login'])) {

	$query_gene = mysqli_query($connect, "SELECT * FROM car_gene WHERE car_brand = '" . $_POST["b"] . "'");

	$row_all = mysqli_num_rows($query_gene);

	if ($row_all > 0) {
		while ($row_gene = mysqli_fetch_assoc($query_gene)) {
			$data[] = "<option value=\" " . $row_gene['car_gene_id'] . " \"> " . $row_gene['car_gene_name'] . " </option>";

		}

	} else {
		$data["error"] = true;
		$data["msg"] = "ไม่่พบ";

	}

	echo json_encode($data);

} else {
	al('not login');
}

function al($msg) {
	echo "<script type=\"text/javascript\">console.log('$msg') </script>";
}
?>