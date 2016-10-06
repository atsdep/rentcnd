<?php
session_start();
require ("config/database.php");
require ("config/connect.php");
include ("process/Select_Member.php");
if (!isset($_SESSION['login'])) {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>ข้อมูลการจอง</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom3.css">
		<link rel="stylesheet" href="css/study.css">
		<link rel="stylesheet" href="css/booking.css">
		
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<?php
			include ("include/navbar.php");
		?>

		<main id="site-content" role="main">

			<div class="subnav hide-print">
				<div class="page-container-responsive">
					<ul class="subnav-list">
						<li>
							<a href="mycar.php" aria-selected="false" class="subnav-item" id="rooms-item">รถเช่าของคุณ</a>
						</li>
						<li>
							<a href="profile.php" aria-selected="true" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
						</li>
						<li>
							<a href="#" aria-selected="false" class="subnav-item" id="account-item">บัญชี</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="page-container-responsive space-top-4 space-4">
				<div class="row">
					<div class="col-md-3 space-sm-3">
						<ul class="sidenav-list">
							<li>
								<a href="profile.php" aria-selected="true" class="sidenav-item">แก้ไขข้อมูลส่วนตัว</a>
							</li>
							<li>
								<a href="profile.php" aria-selected="false" class="sidenav-item">รูปภาพ</a>
							</li>
							<li>
								<a href="profile.php" aria-selected="false" class="sidenav-item">ยืนยันตัวตน</a>
							</li>
							<li>
								<a href="profile.php" aria-selected="false" class="sidenav-item">ความคิดเห็น</a>
							</li>
						</ul>
					</div>
					<div class="col-md-9">
						<div class="your-listings-flash-container"></div>

						<form accept-charset="UTF-8" action="/users/update_reservation_requirements/63856890" method="post">
							<div style="margin:0;padding:0;display:inline">
								<input name="utf8" type="hidden" value="✓">
								<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$1NLIjbajk10$b79L9RWxV_SAoREneDl0jpDTGRV1wXRyAEyKysCFkk0=">
							</div>
							<div class="panel">
								<div class="panel-header">
									บัตรประจำตัวที่ยืนยันแล้ว
								</div>
								<div class="panel-body">

									<input id="id" name="id" type="hidden" value="63856890">

									<p>
										ผู้เข้าพักของคุณจะจำเป็นต้องยืนยันตัวตนของเขาก่อนจองที่พักกับคุณ <a href="/help/article/450" target="_blank"> เรียนรู้เพิ่มเติม </a>
									</p>
									<p>
										ก่อนที่คุณจะสามารถขอให้ผู้เข้าพักยืนยันตัวตนของเขาได้ คุณจะจำเป็นต้องยืนยันตัวตนคุณก่อน!
									</p>
									<p>
										<a href="/verify">ยืนยันตัวตนคุณ</a>เพื่อเริ่มใช้งานข้อกำหนดนี้
									</p>
									<label for="user_preference_require_guest_checkpoint">
										<input name="user_preference[require_guest_checkpoint]" type="hidden" value="0">
										<input disabled="disabled" id="user_preference_require_guest_checkpoint" name="user_preference[require_guest_checkpoint]" type="checkbox" value="1">
										ขอให้ผู้เข้าพักของคุณทำการยืนยันตัวตน </label>
								</div>
								<div class="panel-body">
									<input class="btn btn-primary" name="commit" type="submit" value="บันทึกข้อกำหนดในการจองที่พัก">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
	<div id="footer" class="container-brand-dark row-space-top-6">
			<footer class="page-container-responsive">
				<div class="row row-condensed">
					<div class="col-sm-12 space-4 space-top-4 show-sm">
						<ul class="list-layout list-inline text-center h5">
							<li>
								<a href="/about/about-us" class="link-contrast">เกี่ยวกับเรา</a>
							</li>
							<li>
								<a href="/help?from=footer" class="link-contrast">ความช่วยเหลือ</a>
							</li>
							<li>
								<a href="/terms" class="link-contrast">เงื่อนไขและความเป็นส่วนตัว</a>
							</li>
						</ul>
					</div>

					
					<!-- <div class="col-lg-12 col-md-12 col-md-offset-1 hide-sm">
						<h2 class="h5">บริษัท</h2>

						<ul class="list-layout">
							<li>
								<a href="/about/about-us" class="link-contrast">เกี่ยวกับเรา</a>
							</li>
							<li>
								<a href="/help?from=footer" class="link-contrast">ความช่วยเหลือ</a>
							</li>
							<li>
								<a href="/terms" class="link-contrast">เงื่อนไขและความเป็นส่วนตัว</a>
							</li>
						</ul>
					</div> -->

					
				</div>

				<!-- <hr class="footer-divider space-top-8 space-4 hide-sm"> -->
				<div class="row row-condensed">
					<div class="text-center">
						<h2 class="h5 space-4 hide-sm">ติดตามเราได้ที่</h2>
						<ul class="list-layout list-inline">
							<li>
								<a href="https://www.facebook.com/adthasid.suksomthawisap" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Facebook</span> <i class="icon footer-icon fa fa-facebook"></i> </a>
							</li>

							<li>
								<a href="https://plus.google.com/+airbnb" class="link-contrast footer-icon-container"  rel="publisher" target="_blank"> <span class="screen-reader-only">Google+</span> <i class="icon footer-icon fa fa-google-plus"></i> </a>
							</li>

							<li>
								<a href="https://twitter.com/airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Twitter</span> <i aria-hidden="true" class="icon footer-icon fa fa-twitter"></i> </a>
							</li>

							<li>
								<a href="https://www.linkedin.com/company/airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">LinkedIn</span> <i class="icon footer-icon fa fa-linkedin"></i> </a>
							</li>

							<li>
								<a href="https://www.pinterest.com/airbnb/" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Pinterest</span> <i class="icon footer-icon fa fa-pinterest"></i> </a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/Airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">YouTube</span> <i class="icon footer-icon fa fa-youtube-play"></i> </a>
							</li>
							<li>
								<a href="https://instagram.com/airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Instagram</span> <i class="icon footer-icon fa fa-instagram"></i> </a>
							</li>
						</ul>
						<div class="space-top-2 text-muted">
							Copyright © 2016 Adthasid Suksomthawisap.  All right reserved.
						</div>
					</div>
			</footer>
		</div>

		</body>

	<?php
	require ("config/js.php");
	?>

</html>
