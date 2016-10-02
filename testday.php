<!DOCTYPE html>
<html>

	<body>
		
		<?php
		// เดือนนี้มีกี่วัน   วันที่ 1 คือวันอะไร  วันนี้วันที่เท่าไหร่  สร้างปฏิทิน  เช็คว่าในมีวันที่แก้ใน ดาต้าเบสหรือไม่ ถ้ามี เอาในดาต้าเบส
		date_default_timezone_set("Asia/Bangkok");

		$thaiweek = array("วันอาทิตย์", "วันจันทร์", "วันอังคาร", "วันพุธ", "วันพฤหัส", "วันศุกร์", "วันเสาร์");

		$thaimonth = array("","มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
		
		//echo $thaiweek[date("w")], "ที่",  date(" j "), $thaimonth[date("m") - 1], " พ.ศ. ", date(" Y ") + 543, "<br>";

		//echo date(" j "),  date("m"),   date(" Y "), "<br>";
		
		//echo date("Y-m-d h:i:sa", $cur) . "<br>";

		//echo date("w", $cur) . "<br>";
		
		echo $thaimonth[date("n")];
		
		echo date("F");
		echo date("n", strtotime('+4 month'));
		$first = 1;
		
		echo "วันนี้วันที่ " . date("j") . "<br>";
		

		$info = cal_days_in_month(CAL_GREGORIAN, date("m"), date("y"));

		echo "เดือนนี้มี " . $info. " วัน <br>";

		$cur = strtotime(date("m") . "/" . $first . "/" . date("Y"));

		
		$day = date("w", $cur);

		echo "วันที่ 1 เป็นวัน ";
		switch ($day) {
			case "0" :
				echo "Sunday";
				break;
			case "1" :
				echo "Monday";
				break;
			case "2" :
				echo "Tuesday";
				break;
			case "3" :
				echo "Wednesday";
				break;
			case "4" :
				echo "Thrusday";
				break;
			case "5" :
				echo "Friday";
				break;
			case "6" :
				echo "Saturday";
				break;
		}

		//echo $cur;
		?>
		<table>
   <tr>
        <td onclick="myFunction()">
               s5
        </td>
        	<script>
function myFunction() {
    alert('hey');
</script>
   </tr>
</table>
	</body>
</html>