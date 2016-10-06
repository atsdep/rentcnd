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
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom3.css">
		<link rel="stylesheet" href="css/study.css">
		<link rel="stylesheet" href="css/mycar.css">
		<link rel="stylesheet" href="css/booking.css">
		
		

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
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="ไปที่ไหน">
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right navbar-in-left">

						<li class="">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><?php echo $result_mem['mem_name'] ?></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">แก้ไขข้อมูลส่วนตัว</a>
								</li>
								<li>
									<a href="my_reservations.php">ข้อมูลการจอง</a>
								</li>
								<li>
									<a href="my_reservations.php">การตั้งค่าบัญชี</a>
								</li>
								<li>
									<a href="process/logout.php">ออกจากระบบ</a>
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

		<main id="site-content-mycar-page" role="main">

			<div class="subnav hide-print">
				<div class="page-container-responsive">
					<ul class="subnav-list">
						<li>
							<a href="mycar.php" aria-selected="true" class="subnav-item cohosting-ml-tooltip-trigger" id="rooms-item">รถเช่าของคุณ</a>
						</li>
						<li>
							<a href="profile.php" aria-selected="false" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
						</li>
						<li>
							<a href="" aria-selected="false" class="subnav-item" id="account-item">บัญชี</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="page-container-responsive space-top-4 space-4">
				<div class="row">
					<div class="col-md-3 space-sm-3">
						<ul class="sidenav-list">
							<li>
								<a href="/rooms" aria-selected="true" class="sidenav-item">รถเช่าของคุณ</a>
							</li>
							<li>
								<a href="my_reservations.php" aria-selected="false" class="sidenav-item">การจองของคุณ</a>
							</li>
							<li>
								<a href="requirements.php" aria-selected="false" class="sidenav-item">ข้อกำหนดในการจอง</a>
							</li>
						</ul>
					</div>
					<div class="col-md-9">
						<div class="your-listings-flash-container">
							
							<div id="listings-container">
								<div>
									<div class="suspension-container">
										<div class="panel space-4">
											<div class="panel-header active-panel-header">
												<div class="row">
													<div class="col-sm-6 active-panel-padding">
														กำลังดำเนินการ
													</div>
													<!-- <div id="ib-master-switch-container" class="col-sm-6"></div> -->
												</div>
											</div>
											<ul class="list-unstyled list-layout">
												<li class="listing panel-body">
													<div class="row row-table">
														<i class="icon fa fa-times icon-remove-listing pointer"></i>
														<div class="col-middle space-sm-2 space-top-sm-4 col-md-5">
															<a href="/manage-listing/14938404">
															<div class="media-photo media-photo-block-lg">
																<div class="media-cover text-center">
																	<img class="img-responsive-height" src="img/car.jpg" style="width: 230px">
																</div>
															</div></a>
														</div>

														<div class="col-sm-10 col-lg-7 col-middle">
															<div class="row row-table">
																<div class="col-lg-10">
																	<div class="listing-progress">
																		<div class="text-babu space-top-1 text-title">
																			<span>พร้อมที่จะประกาศแล้ว!</span>
																		</div>
																		<div class="space-top-2"></div>
																	</div>
																</div>
															</div>
															<span class="h4"> <a href="/manage-listing/14938404" class="text-normal"> <span> <span>test</span></span></a></span>
															<div class="text-muted text-grey space-top-1 last-modified-date">
																<span>ปรับปรุงล่าสุดวันที่ 8 กันยายน 2016</span>
															</div>
															<div class="space-top-4">
																<a class="btn btn__first-btn btn-primary" href="/manage-listing/14938404?listnow"> <span>ลงประกาศที่พัก</span></a>
																<a class="btn btn__second-btn" href="/rooms/14938404"> <span>ดูตัวอย่าง</span></a>
															</div>

														</div>
													</div>
												</li>
												<div class="alert alert-block alert-with-icon listing-deletion__alert-box hide">
													<div class="h5 space-top-5">
														<span>ลบที่พักนี้</span>
													</div>
													<div class="space-top-2"></div>
													<p>
														<span>แน่ใจหรือไม่ว่าต้องการลบที่พักนี้? คุณไม่สามารถเพิกถอนการกระทำนี้ได้</span>
													</p><div class="space-top-4"></div>
													<div>
														<div class="btn btn-host">
															<span>ลบ</span>
														</div>
														<div class="btn">
															<span>กลับไป</span>
														</div>
													</div>
												</div>
											</ul>
										</div>

									</div>
								</div>
							</div>
							
						</div>

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
