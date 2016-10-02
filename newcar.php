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
					<h3 class="no-margin-padding">รถของคุณเป็นรถประเภทไหน</h3>
					<div class="panel-title-amenities">
						<div class="block-panel">
							<div class="block-radio-button">
								<label class="btn btn-block block-radio-button__panel">
									<div class="row no-margin-h">
										<i class="pull-left icon icon-with-label icon-gray icon-font-size-20 glyphicon glyphicon-heart"> </i>
										<div class="pull-left block-radio-button__label">
											<span>รถเก๋ง</span>
										</div>
										<div class="pull-right">
											<input id="room-type-entire_home" type="radio" name="roomType" value="entire_home" class="pointer-input">
										</div>
									</div></label>
							</div>
							<div class="block-radio-button">
								<label class="btn btn-block block-radio-button__panel">
									<div class="row no-margin-h">
										<i class="pull-left icon icon-with-label icon-gray icon-font-size-20 glyphicon glyphicon-heart"> </i>
										<div class="pull-left block-radio-button__label">
											<span>รถตู้</span>
										</div>
										<div class="pull-right">
											<input id="room-type-entire_home" type="radio" name="roomType" value="entire_home" class="pointer-input">
										</div>
									</div></label>
							</div>
							<div class="block-radio-button">
								<label class="btn btn-block block-radio-button__panel">
									<div class="row no-margin-h">
										<i class="pull-left icon icon-with-label icon-gray icon-font-size-20 glyphicon glyphicon-heart"></i>
										<div class="pull-left block-radio-button__label">
											<span>รถอเนกประสงค์</span>
										</div>
										<div class="pull-right">
											<input id="room-type-entire_home" type="radio" name="roomType" value="entire_home" class="pointer-input">
										</div>
									</div></label>
							</div>
							<div class="block-radio-button">
								<label class="btn btn-block block-radio-button__panel">
									<div class="row no-margin-h">
										<i class="pull-left icon icon-with-label icon-gray icon-font-size-20 glyphicon glyphicon-heart"></i>
										<div class="pull-left block-radio-button__label">
											<span>รถกระบะ</span>
										</div>
										<div class="pull-right">
											<input id="room-type-entire_home" type="radio" name="roomType" value="entire_home" class="pointer-input">
										</div>
									</div></label>
							</div>

							<h4 class="no-margin-padding mgt30 text-gray">รถของคุณรองรับผู้โดยสารได้สูงสุดกี่คน</h3>
						</div>
						<div class="select select-block select-jumbo plain-select">
							<select id="house-type" name="house_type" class="text-gray">
								<option selected="">1 คน</option>
								<option>2 คน</option>
								<option>3 คน</option>
								<option>4 คน</option>
								<option>5 คน</option>
								<option>6 คน</option>
								<option>7 คน</option>
								<option>8 คน</option>
								<option>9 คน</option>
								<option>10 คน</option>
								<option>11 คน</option>
								<option>12 คน</option>
								<option>13 คน</option>
								<option>14 คน</option>
							</select>
						</div>
						<div class="button-panel">
							<a href="new.php"><span class="">กลับไป</span></a>

							<a class="btn btn-large btn-primary pull-right" href="newcar-2.php" >
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
			$(".error").hide();
			$("#btnRegister").click(function(e) {
				var tName = $("#firstname").val();
				var tSurname = $("#surname").val();
				var tEmail = $("#email").val();
				var tPassword = $("#password").val();
				var tCon_pwd = $("#con_pwd").val();

				$.post("process/Test_Insert.php", {
					n : tName,
					s : tSurname,
					e : tEmail,
					p : tPassword,
					c : tCon_pwd
				}, function(data) {
					var obj = JSON.parse(data);
					if (obj.error) {
						alert("ผิดพลาด");
					} else {
						location.replace("index.php");
					}
				})
			});
		});
	</script>

</html>
