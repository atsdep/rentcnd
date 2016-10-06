<?php
session_start();
require ("config/database.php");
require ("config/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Start</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom3.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		

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

		<div class="col-lg-8">
			<div class="panel-body-filters  panel-light filters">
				<div class="row">
					<div class="col-lg-2 col-md-12 text-center-sm text-center-md space-sm-1">
						<label>วันที่</label>
					</div>

					<form class="col-lg-9 trip-form">
						<div class="row row-condensed">
							<div class="col-md-4 col-sm-6 space-1-sm">
								<label for="map-search-checkin" class="screen-reader-only"> เริ่มบริการ </label>
								<input name="checkin" id="map-search-checkin" type="text" autocomplete="off" class="checkin tour-target ui-datepicker-target" placeholder="เริ่มบริการ">
							</div>

							<div class="col-md-4 col-sm-6 space-1-sm">
								<label for="map-search-checkout" class="screen-reader-only"> สิ้นสุดบริการ </label>
								<input name="checkout" id="map-search-checkout" type="text" autocomplete="off" class="checkout tour-target ui-datepicker-target" placeholder="สิ้นสุดบริการ">
							</div>

							<div class="col-md-4 col-sm-12">
								<div class="select select-block">
									<label for="guest-select" class="screen-reader-only"> จำนวนผู้โดยสาร </label>
									<select name="guests" class="guest-select" id="guest-select" data-prefill="1">
										<option value="1">ผู้โดยสาร 1 คน</option>
										<option value="2">ผู้โดยสาร 2 คน</option>
										<option value="3">ผู้โดยสาร 3 คน</option>
										<option value="4">ผู้โดยสาร 4 คน</option>
										<option value="5">ผู้โดยสาร 5 คน</option>
										<option value="6">ผู้โดยสาร 6 คน</option>
										<option value="7">ผู้โดยสาร 7 คน</option>
										<option value="8">ผู้โดยสาร 8 คน</option>
										<option value="9">ผู้โดยสาร 9 คน</option>
										<option value="10">ผู้โดยสาร 10 คน</option>
										<option value="11">ผู้โดยสาร 11 คน</option>
										<option value="12">ผู้โดยสาร 12 คน</option>
										<option value="13">ผู้โดยสาร 13 คน</option>
										<option value="14">ผู้โดยสาร 14 คน</option>
										<option value="15">ผู้โดยสาร 15+ คน</option>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<hr>
			<div class="panel-body-filters panel-light filters">
				<div class="row">
					<div class="col-lg-2 col-md-12 text-center-sm text-center-md space-sm-1 filter-label">
						<label>เส้นทาง</label>
					</div>

					<form class="col-lg-9 trip-form">
						<div class="row row-condensed">
							<div class="col-md-4 col-sm-6 space-1-sm">
								<label for="map-search-checkin" class="screen-reader-only"> ต้นทาง </label>
								<input name="checkin" id="map-search-checkin" type="text" autocomplete="off" class="checkin tour-target ui-datepicker-target" placeholder="ต้นทาง">
							</div>

							<div class="col-md-4 col-sm-6 space-1-sm">
								<label for="map-search-checkout" class="screen-reader-only"> ปลายทาง </label>
								<input name="checkout" id="map-search-checkout" type="text" autocomplete="off" class="checkout tour-target ui-datepicker-target" placeholder="ปลายทาง">
							</div>

						</div>
					</form>
				</div>
			</div>
			<hr>
			<div class="panel-body-filters panel-light filters" data-name="room_types">
				<div class="row">
					<div class="col-lg-2 col-md-12 text-center-sm text-center-md filter-label">
						<label> ประเภทรถ </label>
					</div>
					<div class="col-lg-9">
						<div class="row row-condensed" id="room-options">
							<div class="col-md-3 col-sm-12 space-sm-1">
								<div class="col-lg-12">
									<div class="col-lg-3">
										<input type="checkbox" name="room-type" value="Entire home/apt">
									</div>
									<div class="col-lg-9">
										<span>รถเก๋ง</span>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-12 space-sm-1">
								<div class="col-lg-12">
									<div class="col-lg-4">
										<input type="checkbox" name="room-type" value="Entire home/apt">
									</div>
									<div class="col-lg-8">
										<span>รถตู้</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 space-sm-1">
								<div class="col-lg-12">
									<div class="col-lg-2">
										<input type="checkbox" name="room-type" value="Entire home/apt">
									</div>
									<div class="col-lg-10">
										<span>รถอเนกประสงค์</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-12 space-sm-1">
								<div class="col-lg-12">
									<div class="col-lg-3">
										<input type="checkbox" name="room-type" value="Entire home/apt">
									</div>
									<div class="col-lg-9">
										<span>รถกระบะ</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="panel-body-filters panel-body-last panel-light filters" data-name="room_types">
				<div class="row">
					<div class="col-lg-2 col-md-12 text-center-sm text-center-md filter-label">
						<label> ช่วงราคา </label>
					</div>
					<div class="col-lg-6">
						<div class="row row-condensed" id="room-options">
							<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
							<div id="slider-range"></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 text-center-sm text-center-md">

					</div>
				</div>
			</div>

		</div>
		<!-- col-lg-8 -->

		<div class="col-lg-4">

		</div>
		<div class="col-lg-12 color-gray">
			<div class="">
				<div class="sidebar-header panel-body clearfix panel-bg-medium">

					<div>

						<button type="button" class="btn pull-left">
							<span>ค้นหารถยนต์อย่างละเอียด</span><span> </span>
						</button></span>

						<div class="crossfading-panel__container text-left pull-right crossfading-panel__container--md hide-sm">
							<div class="crossfading-panel crossfading-panel__vertically-centered-container">
								<h1 class="crossfading-panel--vertically-centered h6 text-left crossfading-panel--margin-left"><span>300+ รถเช่า</span><span><span> · </span><span>กรุงเทพมหานคร</span></span></h1>
							</div>
						</div>

					</div>

				</div>
				<div class="outer-listings-container space-2">
					<div class="listings-container">
						<div class="row">
							<?php
							
							$query_ann = mysqli_query($connect, "SELECT * FROM `announces` WHERE ann_status = 1");
							$row_all = mysqli_num_rows($query_ann);
							
							if($row_all >0){
								
							
							while ($row_ann = mysqli_fetch_assoc($query_ann)) {						
							?>
							
							<div class="col-lg-4 col-md-6">
								<div class="announce">
									<a href="car.php?id=<?php echo $row_ann['announce_id']; ?>">
										<img src="img/suv.jpg" alt="" title="Image 1" class="img-responsive"/>
									</a>
									<div class="image-caption text-center text-center-sm" id="blackeagleImageCaptionID">
										<span>฿ </span><strong><?php echo number_format($row_ann['price_1']); ?></strong>
									</div>
									<div class="col-lg-12 bg-white show">
										<a href="car.php?id=<?php echo $row_ann['announce_id']; ?>">
											<h4 class="listing-name text-truncate"><?php echo $row_ann['ann_title']; ?></h4>
										</a>
										<div class="row text-normal text-muted">
											<?php
											$gene = $row_ann['car_gene'];
											$query_cate = mysqli_query($connect, "SELECT `category_name` 
												FROM `car_category` 
												INNER JOIN `car_gene` 
												ON car_category.category_id = car_gene.car_category 
												WHERE car_gene.car_gene_id = $gene ");
											$result_cate = mysqli_fetch_assoc($query_cate);

											$province = $row_ann['start_province'];
											$query_province = mysqli_query($connect, "SELECT `PROVINCE_NAME` 
												FROM `province` 
												WHERE PROVINCE_ID = $province ");
											$result_province = mysqli_fetch_assoc($query_province);
											?>
											<span class=""><?php echo $result_cate['category_name'] ?></span>
											<span class="space-left-1"><?php echo $result_province['PROVINCE_NAME'] ?></span>
											<!-- <span class="space-left-1">ความคิดเห็น 6 ข้อความ</span> -->
										</div>
									</div>
								</div>
							</div>
							<!-- col-lg-4 -->
							
							<?php
								}
							}
							?>
						</div>
						<!-- row -->

					</div>
				</div>
			</div>
		</div>

		</div>
		<!-- col-lg-12 -->
	</body>

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(function() {
			$("#slider-range").slider({
				range : true,
				min : 300,
				max : 10000,
				values : [300, 10000],
				slide : function(event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
		});
	</script>

</html>
