<?php
session_start();
if ($_SESSION['username'] == "") {
	header("location:index.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>ลงประกาศรถเช่าพร้อมคนขับ</title>
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
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Logo</a>
					<!-- <form class="navbar-left visible-xs">
					<div class="">
					<input type="text" class="form-sm" placeholder="ไปที่ไหน">
					</div>
					</form> -->
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="ไปที่ไหน">
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right navbar-in-left">

						<li>
							<a href="#" class="dropdown-toggle navbar-profile" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Adthasid </a>

							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right navbar-in-left">
						<li>
							<a href="#">ความช่วยเหลือ</a>
						</li>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div class="container-fluid content-new">
			<div class="col-md-7">
				<h1> กลายเป็นเจ้าของประกาศรถเช่า Rentcnd </h1>
				<div class="landing-title-subtitle mbt-45">
					<span> เริ่มด้วยการสร้างหน้ารถเช่า ข้อมูลนี้จะเป็นหน้าโปรไฟล์สำหรับรถเช่าของคุณ </span>
				</div>
				<div class="landing-subtitle-width">
					<strong class="landing-step-number text-base text-light-gray"> <span>ขั้นตอนที่ 1</span> </strong>
					<div class="h3 landing-step-content-title">
						เริ่มที่ข้อมูลพื้นฐาน
					</div>
					<div class="landing-step-content-subtitle mbt-20">
						ประเภทรถ สิ่งอำนวยความสะดวกและอื่นๆ
					</div>

					<a href="newcar-2.php">
					<button class="btn space-top-1 btn-continue">
						<span>ดำเนินการต่อ</span>
					</button></a>
					<hr>
				</div>

				<div class="landing-subtitle-width">
					<strong class="landing-step-number text-base text-light-gray"> <span>ขั้นตอนที่ 2</span> </strong>
					<div class="h3 landing-step-content-title">
						รูปภาพ
					</div>
					<div class="landing-step-content-subtitle mbt-20">
						รูป รายละเอียดสั้นๆ ชื่อประกาศ
					</div>

					<a href="photos.php">
					<button class="btn space-top-1 btn-continue">
						<span>ดำเนินการต่อ</span>
					</button></a>
					<hr>
				</div>

				<div class="landing-subtitle-width">
					<strong class="landing-step-number text-base text-light-gray"> <span>ขั้นตอนที่ 3</span> </strong>
					<div class="h3 landing-step-content-title">
						เตรียมพร้อมสำหรับผู้ใช้บริการ
					</div>
					<div class="landing-step-content-subtitle mbt-20">
						ราคา ปฎิทิน การตั้งค่าการจอง
					</div>

					<a href="province.php">
					<button class="btn space-top-1 btn-continue">
						<span>ดำเนินการต่อ</span>
					</button></a>
					<hr>
				</div>

			</div>
			<div class="col-md-5">

			</div>
		</div>

	</body>

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>
