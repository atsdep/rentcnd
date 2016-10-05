<?php
session_start();
require ("config/database.php");
require ("config/connect.php");
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

		<main id="site-content" role="main">

			<div class="subnav hide-print">
				<div class="page-container-responsive">
					<ul class="subnav-list">
						<li>
							<a href="/dashboard" aria-selected="false" class="subnav-item" id="dashboard-item">แดชบอร์ด</a>
						</li>
						<li>
							<a href="/inbox" aria-selected="false" class="subnav-item" id="inbox-item">กล่องข้อความ</a>
						</li>
						<li>
							<a href="/rooms" aria-selected="true" class="subnav-item cohosting-ml-tooltip-trigger" id="rooms-item">ที่พักของคุณ</a>
						</li>
						<li>
							<a href="/host-assist" aria-selected="false" class="subnav-item" id="host-assist-item">บริการช่วยเหลือเจ้าของที่พัก</a>
						</li>
						<li>
							<a href="/trips/upcoming" aria-selected="false" class="subnav-item" id="your-trips-item">การเดินทางของคุณ</a>
						</li>
						<li>
							<a href="/users/edit" aria-selected="false" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
						</li>
						<li>
							<a href="/account" aria-selected="false" class="subnav-item" id="account-item">บัญชี</a>
						</li>
						<li>
							<a href="/invite?r=32" class="subnav-item" id="invite-friends-item">แนะนำเพื่อน</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="page-container-responsive space-top-4 space-4">

				<div class="row">
					<div class="col-md-3 space-sm-3">
						<ul class="sidenav-list">
							<li>
								<a href="/rooms" aria-selected="false" class="sidenav-item">ที่พักของคุณ</a>
							</li>
							<li>
								<a href="/my_reservations" aria-selected="true" class="sidenav-item">การจองของคุณ</a>
							</li>
							<li>
								<a href="/hosting/requirements" aria-selected="false" class="sidenav-item">ข้อกำหนดในการจอง</a>
							</li>

							<div class="space-top-4 space-4">
								<a href="/rooms/new" aria-selected="false" class="btn btn-host">เพิ่มที่พักใหม่</a>
							</div>

						</ul>
					</div>
					<div class="col-md-9">
						<div class="your-listings-flash-container"></div>

						<div class="panel">
							<div class="panel-body">
								<p>
									คุณไม่มีการจองที่กำลังจะมาถึง
								</p>
								<table>
									<tr>
										<th class="text-center text-center-sm">เลขที่ใบจอง</th>
										<th class="text-center text-center-sm">วันที่จอง</th>
										<th class="text-center text-center-sm">ถึงวันที่</th>
										<th class="text-center text-center-sm">สถานะ</th>
										<th class="text-center text-center-sm" colspan="2">เมนู</th>
									</tr>
									<?php
									$query_reservations = mysqli_query($connect,"SELECT * FROM booking WHERE member_id = 1 ");
									while ($row_reservations = mysqli_fetch_assoc($query_reservations)) {
										
										
									?>

									<tr>
										<td class="text-center text-center-sm"><?php echo $row_reservations['booking_id']; ?></td>
										<td class="text-center text-center-sm"><?php echo date("d/m/Y",strtotime(str_replace('/', '-', $row_reservations['check_in']))) ?></td>
										<td class="text-center text-center-sm"><?php echo date("d/m/Y",strtotime(str_replace('/', '-', $row_reservations['check_out']))) ?></td>
										<td class="text-center text-center-sm"><?php echo $row_reservations['status']; ?></td>
										<td class="text-center text-center-sm">ปริ้น</td>
										<td class="text-center text-center-sm">รายละเอียดเพิ่มเติม</td>
									</tr>

									<?php
									} ?>


								</table>
								<a href="/my_reservations?all=1">ดูประวัติการจองที่พักในอดีต</a>
							</div>
						</div>

					</div>
				</div>
			</div>

		</main>

	</body>

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
