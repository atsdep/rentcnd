<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>รูปภาพ</title>
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
				<span class="navbar-text pull-left hidden-xs">ขั้นตอนที่ 2 : รูปภาพ</span>
				<a href="new.php" class="navbar-text pull-right link">บันทึกและออก</a>
			</div>
		</nav>
		<div class="full-backdrop">

		</div>
		<div class="list-your-space__content">
			<div class="centered-content clearfix">
				<div class="main-panel-container bg-white col-sm-12 no-padding-h">
					<div class="main-panel main-panel-padding main-panel-progress col-sm-12 main-panel-inner-full space-sm-8">
						<div class="panel--no-border panel-title space-4">
							<h3 class="no-margin-padding">รูปภาพ</h3>
						</div>
						<div class="row extend-margin-h photo-card__content space-4">
							<div class="row no-margin-h">
								<div class="col-sm-12 space-4">
									<div>
										<input class="input-file" type="file" id="photo-image" name="image" accept="image/jpg, image/jpeg, image/png, image/gif" multiple="" />
										<label class="col label--no-margin-padding" for="photo-image">
											<div class="panel-body photos__empty-frame photos__empty-drag-highlight va-container va-container-h va-container-v">
												<div class="va-middle text-center text-gray img__upload-photos-ghosts">
													<div class="col col-center">
														<div class="btn btn-primary btn-jumbo text-center">
															<i class="icon icon-upload"> </i><span> </span><span>อัพโหลดรูปภาพ</span>
														</div>
														<!-- <div class="row space-top-2">
														<div class="h4 text-normal">
														<span>หรือลากเข้ามา</span>
														</div>
														</div> -->
													</div>
												</div>
											</div></label>
									</div>
								</div>
							</div>
						</div>
						<div class="button-panel">
							<a href="new.php"><span class="">กลับไป</span></a>

							<a class="btn btn-large btn-primary pull-right" href="description.php" >
							<div class="btn-progress-next__text">
								<span>ถัดไป</span>
							</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>
