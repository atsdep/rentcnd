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
				<span class="navbar-text pull-left hidden-xs">ขั้นตอนที่ 3 : เตรียมพร้อมสำหรับผู้ใช้บริการ</span>
				<a href="new.php" class="navbar-text pull-right link">บันทึกและออก</a>
			</div>
		</nav>

		<div class="container-fluid content-new">
			<div class="col-md-7">
				<div class="panel-header-new">
					<h3 class="no-margin-padding">คุณสามารถบริการไปต่างจังหวัด</h3>
					<div class="panel-title-amenities">
						<div class="block-panel">
							<div>
								<!-- <div class="space-5 amenity-item">
								<input id="wireless_internet" type="checkbox" class="pull-left col-sm-1" value="4">
								<div class="pull-left col-sm-11">
								<label for="wireless_internet"><span>ภายในจังหวัด</span></label><span>&nbsp;</span>
								</div>
								<div class="clearfix">

								</div>
								</div> -->
								<div class="space-5 amenity-item">
									<input id="outprovince" type="checkbox" class="pull-left col-sm-1" value="1">
									<div class="pull-left col-sm-11">
										<label><span>บริการไปต่างจังหวัด</span></label><span>&nbsp;</span>
									</div>
									<div class="clearfix">

									</div>
								</div>

							</div>
						</div>

						<div class="button-panel mgt120">
							<a href="province.php"><span class="">กลับไป</span></a>

							<a id="btn-next" class="btn btn-large btn-primary pull-right" href="#" >
							<div class="btn-progress-next__text">
								<span>ถัดไป</span>
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

				var vOut = 0;
				var mode = "update_outprovince";

				if ($('#outprovince').is(':checked')) {
					vOut = 1;
				}

				$.post("process/Test_Update.php", {
					out : vOut,
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
