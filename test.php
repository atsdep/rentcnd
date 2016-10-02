<html>
	<head>
		<meta charset="UTF-8">
		<!-- Load jQuery from Google's CDN -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<!-- Source our javascript file with the jQUERY code -->
		<script type="text/javascript">
			$(document).ready(function() {

				$("#btnSubmit").click(function(e) {
					var tName = $("#txtName").val();
					var tSurname = $("#txtSurname").val();
					var tEmail = $("#txtEmail").val();
					var tPassword = $("#txtPassword").val();

					$.post("process/Test_Insert.php", {
						n : tName,
						s : tSurname,
						e : tEmail,
						p : tPassword
					}, function(data) {
						console.log(data);
					})
				});

				$("#btnLogin").click(function(e) {
					var lEmail = $("#LoginEmail").val();
					var lPassword = $("#LoginPassword").val();

					$.post("process/Test_Login.php", {
						e : lEmail,
						p : lPassword
					}, function(data) {
						var obj = JSON.parse(data);
						if (obj.error) {
							alert('ขออภัย '+obj.msg);
						} else {
							alert('ยินดีต้อนรับคุณ '+obj.msg);
						}

						//console.log(obj);
					})
				});

			});
		</script>
	</head>
	<body>
		
		<form>
			<input type="text" name="txtName" id="txtName">
			<input type="text" name="txtSurname" id="txtSurname">
			<input type="text" name="txtEmail" id="txtEmail">
			<input type="text" name="txtPassword" id="txtPassword">
			<input type="button" id="btnSubmit" value="ลงทะเบียน">
		</form>

		<form>
			<input type="text" name="LoginEmail" id="LoginEmail">
			<input type="text" name="LoginPassword" id="LoginPassword">
			<input type="button" id="btnLogin" value="เข้าสู่ระบบ">
		</form>
		
		<?php
			date_default_timezone_set("Asia/Bangkok");

			
			$thaiweek=array("วันอาทิตย์","วันจันทร์","วันอังคาร","วันพุธ","วันพฤหัส","วันศุกร์","วันเสาร์");

    		$thaimonth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");

    		echo $thaiweek[date("w")] ,"ที่",date(" j "), $thaimonth[date("m")-1] , " พ.ศ. ",date(" Y ")+543;
			
		?>

	</body>
</html>