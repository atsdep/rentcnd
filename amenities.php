<!DOCTYPE html>
<html lang="en">
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
				<span class="navbar-text pull-left hidden-xs">ขั้นตอน  1 : เริ่มที่ข้อมูลพื้นฐาน</span>
				<a href="new.php" class="navbar-text pull-right link">บันทึกและออก</a>
			</div>
		</nav>

		<div class="container-fluid content-new">
			<div class="col-md-7">
				<div class="panel-header-new">
					<h3 class="no-margin-padding">รถของคุณมีสิ่งอำนวยความสะดวกอะไรบ้าง</h3>
					<div class="panel-title-amenities">
						<div class="block-panel">
							<div>
								<div class="space-5 amenity-item">
									<input id="wifi" name="wifi" type="checkbox" class="pull-left col-sm-1" value="1">
									<div class="pull-left col-sm-11">
										<label><span>Wifi</span></label><span>&nbsp;</span>
									</div>
									<div class="clearfix">

									</div>
								</div>
								<div class="space-5 amenity-item">
									<input id="water" type="checkbox" class="pull-left col-sm-1" value="1">
									<div class="pull-left col-sm-11">
										<label><span>น้ำดื่ม</span></label><span>&nbsp;</span>
									</div>
									<div class="clearfix">

									</div>
								</div>

								<div class="space-5 amenity-item">
									<input id="book" type="checkbox" class="pull-left col-sm-1" value="1">
									<div class="pull-left col-sm-11">
										<label><span>หนังสือ</span></label><span>&nbsp;</span>
									</div>
									<div class="clearfix">

									</div>
								</div>

								<div class="space-5 amenity-item">
									<input id="music" type="checkbox" class="pull-left col-sm-1" value="1">
									<div class="pull-left col-sm-11">
										<label><span>เพลง</span></label><span>&nbsp;</span>
									</div>
									<div class="clearfix">

									</div>
								</div>

								<div class="space-5 amenity-item">
									<input id="tissue" type="checkbox" class="pull-left col-sm-1" value="1">
									<div class="pull-left col-sm-11">
										<label><span>กระดาษทิชชู</span></label><span>&nbsp;</span>
									</div>
									<div class="clearfix">

									</div>
								</div>

								<div class="space-5 amenity-item">
									<input id="childseat" type="checkbox" class="pull-left col-sm-1" value="1">
									<div class="pull-left col-sm-11">
										<label><span>เบาะนั่งสำหรับเด็ก</span></label><span>&nbsp;</span>
									</div>
									<div class="clearfix">

									</div>
								</div>

								<div class="space-5 amenity-item">
									<input id="monitor" type="checkbox" class="pull-left col-sm-1" value="1">
									<div class="pull-left col-sm-11">
										<label><span>จอมอนิเตอร์ติดรถยนต์</span></label><span>&nbsp;</span>
									</div>
									<div class="clearfix">

									</div>
								</div>

							</div>
						</div>

						<div class="button-panel mgt60">
							<a id="btn-back" href="newcar-2.php"><span class="">กลับไป</span></a>

							<a id="btn-next" class="btn btn-large btn-primary pull-right" href="#" >
							<div class="btn-progress-next__text">
								<span>บันทึก</span>
							</div></a>
						</div>
					</div>
				</div>
			</div><!-- col-md-7 -->

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
				var vWifi = 0;
				var vWater = 0;
				var vBook = 0;
				var vMusic = 0;
				var vTissue = 0;
				var vChildseat = 0;
				var vMonitor = 0;
				var mode = "update-amenities"
				if ($('#wifi').is(':checked')) {
					vWifi = 1;
				}
				if ($('#water').is(':checked')) {
					vWater = 1;
				}
				if ($('#book').is(':checked')) {
					vBook = 1;
				}
				if ($('#music').is(':checked')) {
					vMusic = 1;
				}
				if ($('#tissue').is(':checked')) {
					vTissue = 1;
				}
				if ($('#childseat').is(':checked')) {
					vChildseat = 1;
				}
				if ($('#monitor').is(':checked')) {
					vMonitor = 1;
				}

				// console.log(vWifi);
				// console.log(vWater);
				// console.log(vBook);
				// console.log(vMusic);
				// console.log(vTissue);
				// console.log(vChildseat);
				// console.log(vMonitor);

				$.post("process/Test_Update.php", {
					wi : vWifi,
					wa : vWater,
					bo : vBook,
					mu : vMusic,
					ti : vTissue,
					ch : vChildseat,
					mo : vMonitor,
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
