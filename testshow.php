<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>หน้าประกาศ</title>
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
			<div class="container">
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

		
			<div id="photos" class="with-photos with-modal">
				<span class="cover-photo"> <span class="cover-img-container"> <div class="cover-img" style="background-image:url('img/car.jpg?aki_policy=xx_large');">

						</div> </span></span>
			</div>
			<div id="summary">
				<div class="page-container-responsive">
					<div class="row">
						<div class="col-lg-8">
							<div class="summary-component">
								<div class="space-4 space-top-4">
									<div class="row">
										<div class="col-md-3 space-sm-4 text-center space-sm-2">
											<div class="media-photo-badge">
												<a href="#host-profile" class=""><img alt="ใช้รูปโปรไฟล์" class="host-profile-image"  src="img/profile.jpg"></a>
											</div>
										</div>
										<div class="col-md-9">
											<h1 class="h3 space-1 text-center-sm" id="listing_name"> ชื่อหัวข้อประกาศ </h1>
											<div id="display-address" class="space-2 text-muted text-center-sm">
												<span>กรุงเทพมหานคร</span>
											</div>
											<div class="row row-condensed text-muted text-center">
												<div class="col-sm-4">
													<i class="icon icon-size-2 glyphicon glyphicon-heart"></i>
												</div>
												<div class="col-sm-4">
													<i class="icon icon-size-2 glyphicon glyphicon-heart"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3 text-muted text-center hidden-xs">
											<a href="#host-profile" class="link-reset text-wrap">ชื่ออะไรหรอ</a>
										</div>
										<div class="col-md-9">
											<div class="row row-condensed text-muted text-center">
												<div class="col-sm-4">
													รถเก๋ง
												</div>
												<div class="col-sm-4">
													รองรับผู้โดยสาร  4 คน
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 hidden-xs">
							<div class="book-it__container">
								<div class="book-it__price">
									<div class="row">
										<div class="col-sm-8">
											<div class="book-it__price-amount">
												<span class="h3"><span>฿797</span></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="pull-right">
												<div class="book-it__payment-period">
													<span>ต่อวัน</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<form method="post">
									<div class="panel book-it-panel">
										<div class="panel-body panel-light">
											<div class="row row-condensed space-3">
												<div class="col-md-9">
													<div class="row row-condensed">
														<div class="col-sm-6">
															<label class="book-it__label">วันที่เช่า</label>
															<input id="datespan-checkin" type="text" name="checkin" class="checkin ui-datepicker-target" placeholder="วัน-เดือน-ปี">
														</div>
														<div class="col-sm-6">
															<label class="book-it__label">ถึงวันที่</label>
															<input id="datespan-checkout" type="text" name="checkout" class="checkout ui-datepicker-target" placeholder="วัน-เดือน-ปี">
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<div>
														<label class="book-it__label">ผู้โดยสาร</label>
														<div class="select select-block">
															<select>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="2">14</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div>
												<button type="submit" class="btn btn-primary btn-large btn-block">
													<span>ขอจอง</span>
												</button>
											</div>

										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div><!-- summary -->
			<div id="details">
				<div class="page-container-responsive">
					<div class="row">
						<div class="col-lg-8">
							<div class="space-8 space-top-8">
								<h4 class="space-4 text-center-sm"><span>เกี่ยวกับเรา</span></h4>
								<div>
									<p>
										<span>บริการของเรา...</span>
									</p>
									<!-- <p>
									<span>Room on the sixth floor of the condominium close to Chiang Mai University.</span>
									<br>
									<span></spa>The condominium in Chiang Mai town where you can explore good experiences.</span>
									<br>
									<span>Where you can make all every day as the best day.</span>
									</p> -->
								</div>
								<!-- <div class="row row-condensed">
								<div class="col-12">
								<div>
								<button class="btn-link btn-link--bold" type="button">
								<span>ติดต่อเจ้าของที่พัก</span>
								</button>
								</div>
								</div>
								</div> -->
								<hr>
								<div class="row">
									<div class="col-md-3 text-muted">
										<div>
											<span>รถของเรา</span>
										</div>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-6">
												<div>
													<span>&nbsp;&nbsp;&nbsp;</span><span>ยี่ห้อ : </span><strong>Toyota</strong>
												</div>
												<div>
													<span>&nbsp;&nbsp;&nbsp;</span><span>รุ่น : </span><strong>Yaris</strong>
												</div>
												<div>
													<span>&nbsp;&nbsp;&nbsp;</span><span>ปี : </span><strong>2010</strong>
												</div>

											</div>
											<div class="col-md-6">
												<div>
													<span>&nbsp;&nbsp;&nbsp;</span><span>ประเภทรถ  : </span><strong >รถเก๋ง</strong>
												</div>
												<div>
													<span>&nbsp;&nbsp;&nbsp;</span><span>เชื้อเพลิง : </span><strong>แก๊ส LPG</strong>
												</div>
												<div>
													<span>&nbsp;&nbsp;&nbsp;</span><span>รองรับผู้โดยสาร : </span><strong>4 คน</strong>
												</div>

											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3 text-muted">
										<div>
											<span>สิ่งอำนวยความสะดวก</span>
										</div>
									</div>
									<div class="col-md-9 expandable">
										<div class="expandable-content-summary">
											<div class="row">
												<div class="col-sm-6">
													<div>
														<div class="space-1">
															<span><i class="icon h3 icon-meal"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id="amenity-short-tooltip-trigger-8"><span>ห้องครัว</span></span>
														</div>
													</div>
													<div>
														<div class="space-1">
															<span><i class="icon h3 icon-meal"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id="amenity-short-tooltip-trigger-8"><span>ห้องครัว</span></span>
														</div>
													</div>
													<button class="btn-link btn-link--bold" type="button">
														<span>+ เพิ่มเติม</span>
													</button>
												</div>
												<div class="col-sm-6">
													<div>
														<div class="space-1">
															<span><i class="icon h3 icon-tv"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id="amenity-short-tooltip-trigger-1"><span>ทีวี</span></span>
														</div>
													</div>
													<div>
														<div class="space-1">
															<span><i class="icon h3 icon-tv"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id="amenity-short-tooltip-trigger-1"><span>ทีวี</span></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="expandable-content expandable-content-full">
											<div class="row">
												<div class="col-sm-6">
													<div>
														<div class="space-1">
															<span><i class="icon h3 icon-meal"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id="amenity-long-tooltip-trigger-8"><strong>ห้องครัว</strong></span>
														</div>
													</div>
													<div>
														<div class="space-1 text-muted">
															<span>&nbsp;&nbsp;&nbsp;</span><span id="amenity-long-tooltip-trigger-11"><del>สูบบุหรี่ได้</del></span>
														</div>
													</div>

												</div>
												<div class="col-sm-6" data-reactid=".22fo57b4m4g.0.0.0.0.3.a.1.1.0.$1">
													<div>
														<div class="space-1">
															<span><i class="icon h3 icon-meal"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id="amenity-long-tooltip-trigger-8"><strong>ห้องครัว</strong></span>
														</div>
													</div>
													<div>
														<div class="space-1 text-muted">
															<span>&nbsp;&nbsp;&nbsp;</span><span id="amenity-long-tooltip-trigger-11"><del>สูบบุหรี่ได้</del></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3 text-muted">
										<div>
											<span>ราคา</span>
										</div>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-6">

											</div>
											<div class="col-md-6">

											</div>
										</div>
									</div>
								</div>
								<hr data-reactid=".22fo57b4m4g.0.0.0.0.3.d">
								<div class="row description" id="description" data-reactid=".22fo57b4m4g.0.0.0.0.3.e">
									<div class="col-md-3 text-muted" data-reactid=".22fo57b4m4g.0.0.0.0.3.e.0">
										<div data-reactid=".22fo57b4m4g.0.0.0.0.3.e.0.0">
											<span data-reactid=".22fo57b4m4g.0.0.0.0.3.e.0.0.0">รายละเอียด</span>
										</div>
									</div>
									<div class="col-md-9">
										<div class="react-expandable">
											<div class="">
												<div>
													<p>
														<strong><span>รถเช่า</span></strong>
													</p>
													<div>
														<p>
															<span>• ติดมหาวิทยาลัยเชียงใหม่</span>
															<br>
															<span>• ติดมหาวิทยาลัยเชียงใหม่</span>
															<br>
															<span>• ติดมหาวิทยาลัยเชียงใหม่</span>
															<br>
															<span>• Concept การ Design มีแรงบันดาลใจจากสถาบันการศึกษาชั้นนำในต่างประเทศ</span>
														</p>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<hr>
								<div class="row react-house-rules" id="house-rules">
									<div class="col-md-3">
										<div class="text-muted">
											<span>กฎของที่พัก</span>
										</div>
									</div>
									<div class="col-md-9">
										<div class="structured_house_rules">
											<div class="row col-sm-12">
												<span>ห้ามสูบบุหรี่</span>
											</div>
											<div class="row col-sm-12">
												<span>ห้ามสูบบุหรี่</span>
											</div>
											<div class="row col-sm-12">
												<span>ห้ามสูบบุหรี่</span>
											</div>
											<div class="row col-sm-12">
												<span>ห้ามสูบบุหรี่</span>
											</div>
											<!-- <div class="row">
											<div class="col-sm-2">
											<hr class="structured_house_rules__hr">
											</div>
											</div> -->
										</div>

									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3 text-muted">
										<div>
											<span>คุณลักษณะด้านความปลอดภัย</span>
										</div>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-sm-6">
												<div>
													<div class="space-1">
														<span id="amenity-short-tooltip-trigger-35"><span>เครื่องดักจับควัน</span></span>
													</div>
												</div>
												<div>
													<div class="space-1">
														<span id="amenity-short-tooltip-trigger-35"><span>เครื่องดักจับควัน</span></span>
													</div>
												</div>
												<div>
													<div class="space-1">
														<span id="amenity-short-tooltip-trigger-35"><span>เครื่องดักจับควัน</span></span>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div>
													<div class="space-1">
														<span id="amenity-short-tooltip-trigger-35"><span>เครื่องดักจับควัน</span></span>
													</div>
												</div>
												<div>
													<div class="space-1">
														<span id="amenity-short-tooltip-trigger-35"><span>เครื่องดักจับควัน</span></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3 text-muted">
										<div>
											<span>พร้อมบริการ</span>
										</div>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-6">
												<strong>1 วัน</strong> การเช่าขั้นต่ำ
											</div>
											<div class="col-md-6">
												<a id="view-calendar" href="#"><strong><span>ดูปฏิทิน</span></strong></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- details -->
			<div id="reviews" class="room-section webkit-render-fix">
				<div class="panel">
					<div class="page-container-responsive space-2">
						<div class="row">
							<div class="col-lg-8">
								<div class="review-wrapper">

									<div class="review-main">
										<div class="review-content">
											<div class="panel-body">
												<h4 class="space-4 text-center-sm"><span>บริการรถเช่านี้อยากได้ความคิดเห็นจากคุณ</span></h4>
												<div>
													<p>
														<span>เมื่อคุณจองบริการนี้ คุณจะสามารถแสดงความคิดเห็นได้ตรงนี้</span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- reviews -->
			<div id="host-profile" class="room-section webkit-render-fix">
				<div class="page-container-responsive space-top-8 space-8">
					<div class="row">
						<div class="col-lg-8">
							<h4 class="space-2 text-center-sm"><span>เจ้าของรถเช่าของคุณ</span></h4>
							<hr class="space-4 space-top-2">
							<div class="row">
								<div class="col-md-3 text-center">
									<div class="media-photo-badge">
										<a href="/users/show/63856890" class="media-photo media-round"><img alt="Adthasid" class="media-photo media-round" height="90" width="90" src="img/profile.jpg" title="Adthasid"></a>
									</div>
								</div>
								<div class="col-md-9">
									<h3 class="space-1"><a class="link-reset" href="/users/show/63856890">Adthasid</a></h3>
									<div class="row row-condensed space-2">
										<div class="col-md-12 text-muted">
											<span>กรุงเทพมหานคร</span><span> · </span><span>เป็นสมาชิกตั้งแต่ มีนาคม 2016</span>
										</div>
									</div><div class="space-top-3"></div>
									<div class="">
										<button type="button" class="btn btn-primary btn-small">
											<span>ติดต่อเจ้าของที่พัก</span>
										</button>
									</div>
								</div>
							</div
						</div>
					</div>
				</div>
			</div>

	
	</body>

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
