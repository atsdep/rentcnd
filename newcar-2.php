<?php
session_start();
require ("config/database.php");
require ("config/connect.php");

if (!isset($_SESSION['login'])) {
	header("location:index.php");
	exit();
}

include ("process/Select_Car.php");
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

		<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0"> -->

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
				<span class="navbar-text pull-left hidden-xs">ขั้นตอน  1 : เริ่มที่ข้อมูลพื้นฐาน</span>
				<a href="new.php" class="navbar-text pull-right link">บันทึกและออก</a>
			</div>
		</nav>

		<div class="container-fluid content-new">
			<div class="col-md-7">
				<div class="panel-header-new">
					<h3 class="no-margin-padding">รถของคุณเป็นรถอะไร</h3>
					<div class="panel-title-amenities">
						<div class="block-panel">
							<h4 class="no-margin-padding mgt30 text-gray">เลือกยี่ห้อรถยนต์</h4>
							<div class="select select-block select-jumbo">
								<select id="brand" name="brand" class="text-gray">
									<option value="0" selected="" disabled="">เลือกหนึ่งข้อ</option>
									<?php

									while ($row_brand = mysqli_fetch_assoc($query_brand)) {
										echo "<option value=\" " . $row_brand['car_brand_id'] . " \"> " . $row_brand['car_brand_name'] . "</option> ";
									}
									?>
								</select>
							</div>
							<h4 class="no-margin-padding mgt30 text-gray">เลือกรุ่นรถยนต์</h4>
							<div class="select select-block select-jumbo">
								<select id="generation" name="generation" class="text-gray" disabled>
									<option selected="" disabled="">เลือกหนึ่งข้อ</option>
								</select>
							</div>

							<h4 class="no-margin-padding mgt30 text-gray">เลือกปีรถยนต์</h4>
							<div class="select select-block select-jumbo">
								<select id="year" name="year" class="text-gray">
									<option selected="" disabled="">เลือกหนึ่งข้อ</option>
									<option value="2016">2016</option>
									<option value="2015">2015</option>
									<option value="2014">2014</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
								</select>
							</div>
						</div>

						<h4 class="no-margin-padding mgt30 text-gray">รถของคุณรองรับผู้โดยสารได้สูงสุดกี่คน</h3>
						<div class="select select-block select-jumbo plain-select">
							<select id="passenger" name="passenger" class="text-gray">
								<option selected="" disabled="">เลือกหนึ่งข้อ</option>
								<option value="1">1 คน</option>
								<option value="2">2 คน</option>
								<option value="3">3 คน</option>
								<option value="4">4 คน</option>
								<option value="5">5 คน</option>
								<option value="6">6 คน</option>
								<option value="7">7 คน</option>
								<option value="8">8 คน</option>
								<option value="9">9 คน</option>
								<option value="10">10 คน</option>
								<option value="11">11 คน</option>
								<option value="12">12 คน</option>
								<option value="13">13 คน</option>
								<option value="14">14 คน</option>
							</select>
						</div>
						<div class="button-panel mgt60">
							<a href="new.php"><span class="">กลับไป</span></a>

							<button id="btn-next" name="btn-next" class="btn btn-large btn-primary pull-right" href="#.php">
								<!-- amenities -->
								<div class="btn-progress-next__text">
									<span>ถัดไป</span>
								</div>
							</button>
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

			$("#brand").change(function() {
				var vBrand = $("#brand").val();

				$.post("process/Select_Gene.php", {
					b : vBrand
				}, function(data) {
					var obj = JSON.parse(data);

					if (obj.error) {
						$("#generation").empty();
						document.getElementById("generation").disabled = true;
						$("#generation").append("<option>เลือกหนึ่งข้อ</option>");

					} else {
						$("#generation").empty();
						document.getElementById("generation").disabled = false;
						$("#generation").append("<option>เลือกหนึ่งข้อ</option>");
						for ( $i = 0; $i < obj.length; $i++) {
							$("#generation").append(obj[$i]);
						}
					}

				})
			});

			$("#btn-next").click(function(e) {
				//var vBrand = $("#brand").val();
				var vGeneration = $("#generation").val();
				var vYear = $("#year").val();
				var vPassenger = $("#passenger").val();
				var mode = "add_gene";

				$.post("process/Test_Update.php", {
					g : vGeneration,
					y : vYear,
					p : vPassenger,
					mode : mode

				}, function(data) {
					var obj = JSON.parse(data);
					if (obj.error) {
						alert(obj.msg);
					} else {
						location.replace(obj.update);
					}
				})
			});
		});
	</script>
</html>
