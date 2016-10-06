<?php
require ("config/datetime.php");
require ("process/calendar_controller.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Calendar</title>
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
					<h3 class="no-margin-padding">ผู้ใช้สามารถใช้บริการของคุณได้เมื่อใด</h3>
					<div class="panel--no-border panel-title">
						<h4 class="text-gray mgt30">ปฏิทิน</h4>
					</div>
					<div class="day-picker-container">
						<div class="DayPicker text-center va-top space-8">
							<table>
								<caption class="DayPicker-caption space-2">
									<strong><?php echo $thaimonth[date("n")] , " ", date(" Y ") + 543?></strong>
								</caption>
								<thead class="text-gray text-center text-small">
									<tr>
										<td>อา</td><td>จ</td><td >อ</td><td>พ</td><td>พฤ</td><td>ศ</td><td>ส</td>
									</tr><tr class="week-header-filler"></tr>
								</thead>
								<tbody id="one_mouth">
									
									<?php
									$m = date("m");
									$y = date("Y");
									calendar($m, $y);
									?>
									
								</tbody>
							</table>
						</div>
						<div class="DayPicker text-center va-top space-8">
							<table>
								<caption class="DayPicker-caption space-2">
									<strong><?php echo $thaimonth[date("n", strtotime('+1 month'))] , " ", date(" Y ") + 543?></strong>
								</caption>
								<thead class="text-gray text-center text-small">
									<tr>
										<td>อา</td><td>จ</td><td >อ</td><td>พ</td><td>พฤ</td><td>ศ</td><td>ส</td>
									</tr><tr class="week-header-filler"></tr>
								</thead>
								<tbody id="two_mouth">
									<?php
									$m = date("m", strtotime('+1 month'));
									$y = date("Y");
									calendar($m, $y);
									?>
								</tbody>
							</table>
						</div>
						<div class="DayPicker text-center va-top space-8">
							<table>
								<caption class="DayPicker-caption space-2">
									<strong><?php echo $thaimonth[date("n", strtotime('+2 month'))] , " ", date(" Y ") + 543?></strong>
								</caption>
								<thead class="text-gray text-center text-small">
									<tr>
										<td>อา</td><td>จ</td><td >อ</td><td>พ</td><td>พฤ</td><td>ศ</td><td>ส</td>
									</tr><tr class="week-header-filler"></tr>
								</thead>
								<tbody id="three_mouth">
									<?php
									$m = date("m", strtotime('+2 month'));
									$y = date("Y");
									calendar($m, $y);
									?>
								</tbody>
							</table>
						</div>
						
						
					</div>

					<div class="panel-title-amenities">
						<!-- <div class="block-panel">

						</div> -->

						<div class="button-panel mgt60">
							<a href="manage-cl.php"><span class="">กลับไป</span></a>

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
		

		
			var number = <?php echo date("j") ?>
			;

			var step_oneMouth = document.querySelectorAll("#one_mouth td.DayPicker-day");
			for (var i = 0; i < step_oneMouth.length; i++) {

				if (step_oneMouth[i].innerHTML < number && step_oneMouth[i].innerHTML != "") {
					step_oneMouth[i].className = "DayPicker-day DayPicker-day--blocked-past-date";
				}
			}//block date

			$("td.DayPicker-day--available").click(function(e) {
				$(this).toggleClass("DayPicker-day--available DayPicker-day--unavailable");
			});

			$("#btn-next").click(function(e) {

				var select_date_ava = document.querySelectorAll("td.DayPicker-day--available");
				var ava_all_date = new Array(select_date_ava.length);
				for (var i = 0; i < select_date_ava.length; i++) {

					ava_all_date[i] = $(select_date_ava[i]).attr("data-date");

				}//find available date

				var select_date_unava = document.querySelectorAll("td.DayPicker-day--unavailable");
				var unava_all_date = new Array(select_date_ava.length);
				for (var i = 0; i < select_date_unava.length; i++) {

					unava_all_date[i] = $(select_date_unava[i]).attr("data-date");

				}//find unavailable date

				var vData1 = ava_all_date;
				var vData2 = unava_all_date;
				var mode = "update_calendar";
				var vLength1 = select_date_ava.length;
				var vLength2 = select_date_unava.length;

				$.post("process/Test_Update.php", {
					D1 : vData1,
					D2 : vData2,
					mode : mode,
					l1 : vLength1,
					l2 : vLength2

				}, function(data) {
					var obj = JSON.parse(data);
					if (obj.error) {
						alert(obj.msg);
					} else {
						location.replace(obj.update);
						// console.log(obj);
					}
				})
			});
			});
	</script>
</html>
