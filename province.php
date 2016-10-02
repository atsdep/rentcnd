<?php
session_start();
require ("config/database.php");
require ("config/connect.php");

if (!isset($_SESSION['login'])) {
	header("location:index.php");
	exit();
}

include ("process/Select_Province.php");
?>

<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>index</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom3.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<nav class="navbar navbar-default navbar-in">
			<div class="container-fluid">

				<a class="navbar-brand" href="index.php">Logo</a>
				<span class="navbar-text pull-left hidden-xs">ขั้นตอนที่ 3 : เตรียมพร้อมสำหรับผู้ใช้บริการ</span>
				<a href="new.php" class="navbar-text pull-right link">บันทึกและออก</a>
			</div>
		</nav>

		<div class="container-fluid content-new">
			<div class="col-md-7">
				<div class="panel-header-new">
					<h3 class="no-margin-padding">จุดเริ่มต้นเส้นทางการเดินทาง</h3>
					<div class="panel-title-amenities">
						<div class="block-panel">
							<h4 class="no-margin-padding mgt30 text-gray">จังหวัดที่คุณอยู่</h4>
							<div class="select select-block select-jumbo">

								<select id="province" name="province" class="text-gray">
									<option selected="" disabled="">เลือกหนึ่งข้อ</option>
									<?php

									while ($row_province = mysqli_fetch_assoc($query_province)) {
										echo "<option value=\" " . $row_province['PROVINCE_ID'] . " \"> " . $row_province['PROVINCE_NAME'] . "</option> ";
									}
									?>
								</select>
							</div>
						</div>

						<div class="button-panel mgt120">
							<a href="new.php"><span class="">กลับไป</span></a>

							<a id="btn-next" class="btn btn-large btn-primary pull-right" href="#.php">
							<div class="btn-progress-next__text">
								<span>ถัดไป</span>
							</div></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">

			</div>
		</div>

	</body>

	<?php
	require ("config/js.php");
	?>

	<script type="text/javascript">
		$(document).ready(function() {
			//$(".error").hide();

			$("#btn-next").click(function(e) {
				
				var vProvince = $("#province").val();
				var mode = "update_province";

				$.post("process/Test_Update.php", {
					pro : vProvince,
					mode : mode

				}, function(data) {
					var obj = JSON.parse(data);
					if (obj.error) {
						alert(obj.msg);
					} else {
						location.replace(obj.update);
						console.log(obj);
					}
				})
			});
		});
	</script>
</html>
