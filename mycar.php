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
		
		<script src="dist/sweetalert.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
		
		

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<?php
			include ("include/navbar.php");
		?>

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
								<a href="mycar.php" aria-selected="true" class="sidenav-item">รถเช่าของคุณ</a>
							</li>
							<li>
								<a href="my_reservations.php" aria-selected="false" class="sidenav-item">การจองของคุณ</a>
							</li>
							<li>
								<a href="booking.php" aria-selected="false" class="sidenav-item">การจองของลูกค้า</a>
							</li>
							<li>
								<a href="requirements.php" aria-selected="false" class="sidenav-item">ข้อกำหนดในการจอง</a>
							</li>
						</ul>
					</div>
					<?php
					$query_ann = mysqli_query($connect, "SELECT * FROM announces WHERE member_id = '" . $_SESSION['mem_id'] . "' ");
					$row_ann = mysqli_num_rows($query_ann);
					$result_ann = mysqli_fetch_assoc($query_ann);
					?>
					<div class="col-md-9">
						<div class="your-listings-flash-container">
							
							<div id="listings-container">
								<div>
									<div class="suspension-container">
										<div class="panel space-4">
											<div class="panel-header active-panel-header">
												<div class="row">
													<div class="col-sm-6 active-panel-padding">
														<?php
														if ($row_ann > 0) {
															switch ($result_ann['ann_status']) {
																case '0' :
																	echo "กำลังดำเนินการ";
																	break;
																case '1' :
																	echo "กำลังประกาศหาคนใช้บริการ";
																	break;

																default :
																	echo "คุณยังไม่มีประกาศให้เช่ารถพร้อมคนขับ";
																	break;
															}
														} else {
															echo "คุณยังไม่ได้ลงประกาศ";
														}
														?>
														<!-- กำลังดำเนินการ -->
													</div>
												</div>
											</div>
											<?php 
												if($row_ann > 0 ){
											?>
													<ul class="list-unstyled list-layout">
												<li class="listing panel-body">
													<div class="row row-table">
														<i class="icon fa fa-times pointer pull-right" title="ลบประกาศ" onClick="DeleteAnn(<?php echo $result_ann['announce_id']?>,'delete')"></i>
														<div class="col-middle space-sm-2 space-top-sm-4 col-md-5">
															<a href="car.php?id=<?php echo $result_ann['announce_id']; ?>">
															<div class="media-photo media-photo-block-lg">
																<div class="media-cover text-center">
																	<!-- <?php
																	if ($row_ann > 0) {
																		if ($result_ann['pic_1'] == NULL) {
																			$pic =  "img/no-image.jpg";
																		} else {
																			$pic = $result_ann['pic_1'];
																		}
																	}
																	?> -->

																	<img class="panel pic-mycar img-auto-mycar" src="img/car.jpg">
																</div>
															</div></a>
														</div>

														<div class="col-sm-10 col-lg-7 col-middle">
															<div class="row row-table">
																<div class="col-lg-10">
																	<div class="listing-progress">
																		<div class="text-babu space-top-1 text-title">
																			<span>
																				<?php
																				switch ($result_ann['ann_status']) {
																					case '0' :
																						echo "พร้อมที่จะประกาศแล้ว!!";
																						break;
																					case '1' :
																						echo "กำลังประกาศหาคนเช่าบริการ";
																						break;

																					default :
																						echo "ประกาศของคุณยังไม่พร้อม";
																						break;
																				}
																				?>
																			</span>
																		</div>
																		<div class="space-top-2"></div>
																	</div>
																</div>
															</div>
															<span class="h4"> <a href="car.php?id=<?php echo $result_ann['announce_id']; ?>" class="text-normal"> <span> <span><?php
															if ($row_ann > 0) {echo $result_ann['ann_title'];
															}
															?></span></span></a></span>
															<div class="text-muted text-grey space-top-1 last-modified-date">
																<span>ปรับปรุงล่าสุดวันที่ 8 กันยายน 2016</span>
															</div>
															<div class="space-top-4">
																<a class="btn btn__first-btn btn-primary" onClick="Send(<?php echo $result_ann['announce_id']?>,<?php echo $result_ann['ann_status']?>,'ready')">
																<span>
																<?php
																switch ($result_ann['ann_status']) {
																	case '0' :
																		echo "ลงประกาศรถเช่า";
																		break;
																	case '1' :
																		echo "แก้ไขประกาศ";
																		break;

																	default :
																		echo "ลงประกาศให้เสร็จ";
																		break;
																}
																?>
																</span></a>
																<?php 
																	if($result_ann['ann_status'] == 0){	
																?>
																<a class="btn btn__second-btn" href="car.php?id=<?php echo $result_ann['announce_id']; ?>"> <span>ดูตัวอย่าง</span></a>
																<?php
																}
																?>
																
															</div>

														</div>
													</div>
												</li>
											</ul>
											<?php
											}else{
											?>
												<a class="panel" href="start.php">
											<button class="btn space-top-1 btn-continue">
												<span>ลงประกาศ</span>
											</button></a>
											<?php
											}
											?>
											
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
	<script type="text/javascript" charset="utf-8">
		function Send(id, status, mode) {
			if (mode == 'ready') {
				if (status == 0) {

					$.post("process/Test_Update.php", {
						id : id,
						mode : mode
					}, function(data) {

						if (data.error) {
							sweetAlert("ขออภัย...", data.msg, "error");
						} else {
							swal({
								type : "success",
								title : "ลงประกาศเรียบร้อยแล้ว",
								text : "ระบบจะพาคุณไปยังหน้าประกาศของคุณ",
								timer : 1500,
								showConfirmButton : false
							}, function() {
								window.location.assign("car.php?id=" + id);
								;
							});
						}

					}, "json");

					return false;

				}
			}
		}

		function DeleteAnn(id, mode) {
			if (mode == 'delete') {
				swal({
					title : "คุณต้องการลบประกาศนี้?",
					text : "คุณจะไม่สามารถกู้คืนกลับมาได้!",
					type : "warning",
					showCancelButton : true,
					confirmButtonColor : "#DD6B55",
					confirmButtonText : "ยืนยันการลบ!",
					cancelButtonText : "ยกเลิก",
					closeOnConfirm : false

				}, function(isConfirm) {
					if (isConfirm) {

						$.post("process/Delete_Ann.php", {
							id : id,
							mode : mode
						}, function(data) {

							if (data.error) {
								sweetAlert("ขออภัย...", data.msg, "error");
							} else {
								swal({
									type : "success",
									title : "ลบประกาศของคุณเรียบร้อยแล้ว",
									text : "คุณจะสามารถสร้างประกาศใหม่ได้",
									timer : 3000,
									showConfirmButton : true
								}, function() {
									location.reload();
									;
								});
							}

						}, "json");

						return false;

					}
				});

			}
		}

	</script>

</html>
