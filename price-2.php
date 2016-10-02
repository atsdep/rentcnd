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

				<a class="navbar-brand" href="index.html">Logo</a>
				<span class="navbar-text pull-left hidden-xs">ขั้นตอนที่ 3 : เตรียมพร้อมสำหรับผู้ใช้บริการ</span>
				<a href="new.html" class="navbar-text pull-right link">บันทึกและออก</a>
			</div>
		</nav>

		<div class="container-fluid content-new">
			<div class="col-md-7">
				<div class="panel-header-new">
					<h3 class="no-margin-padding">การกำหนดราคาเพิ่มเติม</h3>
					<div class="panel-title-amenities">
						<div class="block-panel">
							<h4 class="no-margin-padding mgt30">ภายในจังหวัด</h4>
							<div class="space-top-2">
								<div>
									<div class="">
										<!-- <label for="price-stepper" class="h4 text-muted text-normal"> <span>รายวัน</span> </label> -->
										<div>
											<div class="increment-btn no-padding">
												<div class="increment-btn btn-group no-padding">
													<div class="text-gray btn increment-jumbo increment-btn__label" tabindex="0">
														<div class="increment-btn__border-container-label text-truncated">
															<span class="text-black">฿</span>
															<input class="increment-btn__input" id="price-stepper" type="number" value="" style="width: 46px;">
															<span class="text-muted"><span>ต่อ 3 ชั่วโมง</span></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="block-panel space-top-5">
							<h4 class="no-margin-padding">ไปต่างจังหวัด</h4>
							<div class="space-top-2">
								<div class="select select-block select-jumbo">
									<select id="house-type" name="house_type" class="text-gray">
										<option selected="" disabled="">เลือกหนึ่งข้อ</option>
										<option>กรุงเทพ</option>
										<option>เชียงใหม่</option>
									</select>
								</div>
							</div>
							<div class="space-top-2">
								<div>
									<div class="">
										<!-- <label for="price-stepper" class="h4 text-muted text-normal"> <span>รายวัน</span> </label> -->
										<div>
											<div class="increment-btn no-padding">
												<div class="increment-btn btn-group no-padding">
													<div class="text-gray btn increment-jumbo increment-btn__label" tabindex="0">
														<div class="increment-btn__border-container-label text-truncated">
															<span class="text-black">฿</span>
															<input class="increment-btn__input" id="price-stepper" type="number" value="" style="width: 46px;">
															<span class="text-muted"><span>ต่อ 3 ชั่วโมง</span></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="button-panel mgt120">
							<a href="price.html"><span class="">กลับไป</span></a>

							<a class="btn btn-large btn-primary pull-right" href="manage-cl.html">
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

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>
