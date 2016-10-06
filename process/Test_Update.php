<?php
session_start();
require ("../config/database.php");
require ("../config/connect.php");

if ($_POST["mode"] == "add_gene") {

	$mem_user = $_SESSION['mem_id'];

	$query = mysqli_query($connect, "UPDATE announces SET car_gene =  '" . $_POST["g"] . "'  
			, passenger = '" . $_POST["p"] . "' 
			, car_year = '" . $_POST["y"] . "'  
			WHERE member_id = $mem_user ");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "กรุณากรอกข้อมูลให้ครบ";

	} else {
		$data["error"] = false;
		$data["update"] = "amenities.php";

	}
} else if ($_POST["mode"] == "update-amenities") {

	$mem_user = $_SESSION['mem_id'];

	$query = mysqli_query($connect, "UPDATE announces SET wifi =  '" . $_POST["wi"] . "'  
			, water = '" . $_POST["wa"] . "' 
			, book = '" . $_POST["bo"] . "'  
			, music = '" . $_POST["mu"] . "' 
			, tissue = '" . $_POST["ti"] . "' 
			, childseat = '" . $_POST["ch"] . "'
			, monitor = '" . $_POST["mo"] . "'
			 WHERE member_id = $mem_user ");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

	} else {
		$data["error"] = false;
		$data["update"] = "new.php";

	}
} else if ($_POST["mode"] == "update_des") {

	$mem_user = $_SESSION['mem_id'];

	$query = mysqli_query($connect, "UPDATE announces SET ann_description =  '" . $_POST["des"] . "'  
			 WHERE member_id = $mem_user ");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

	} else {
		$data["error"] = false;
		$data["update"] = "title_ann.php";

	}
} else if ($_POST["mode"] == "update_title") {

	$mem_user = $_SESSION['mem_id'];

	$query = mysqli_query($connect, "UPDATE announces SET ann_title =  '" . $_POST["title"] . "'  
			 WHERE member_id = $mem_user ");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

	} else {
		$data["error"] = false;
		$data["update"] = "new.php";

	}
} else if ($_POST["mode"] == "update_province") {

	$mem_user = $_SESSION['mem_id'];

	$query = mysqli_query($connect, "UPDATE announces SET start_province =  '" . $_POST["pro"] . "'  
			 WHERE member_id = $mem_user ");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

	} else {
		$data["error"] = false;
		$data["update"] = "question.php";

	}
} else if ($_POST["mode"] == "update_outprovince") {

	$mem_user = $_SESSION['mem_id'];

	$query = mysqli_query($connect, "UPDATE announces SET out_province =  '" . $_POST["out"] . "'  
			 WHERE member_id = $mem_user ");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

	} else {
		$data["error"] = false;
		$data["update"] = "question-2.php";

	}
} else if ($_POST["mode"] == "update_price_terms") {

	$mem_user = $_SESSION['mem_id'];

	$query = mysqli_query($connect, "UPDATE announces SET fuel_expen =  '" . $_POST["f"] . "'  
			, expressway_expen = '" . $_POST["ex"] . "' 
			, park_expen = '" . $_POST["p"] . "'  
			 WHERE member_id = $mem_user ");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

	} else {
		$data["error"] = false;
		$data["update"] = "price.php";

	}
} else if ($_POST["mode"] == "update_price") {

	$mem_user = $_SESSION['mem_id'];

	$query = mysqli_query($connect, "UPDATE announces SET price_1 =  '" . $_POST["p1"] . "'  
			 WHERE member_id = $mem_user ");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

	} else {
		$data["error"] = false;
		$data["update"] = "calendar.php";

	}
} else if ($_POST["mode"] == "update_calendar") {

	$mem_user = $_SESSION['mem_id'];

	$conn_query_a = mysqli_query($connect, "SELECT * FROM `announces` WHERE member_id =  1 ");

	$row_a = mysqli_fetch_assoc($conn_query_a);

	$introw_a = mysqli_num_rows($conn_query_a);

	if ($introw_a == 1) {

		$_SESSION['ann_id'] = $row_a["announce_id"];

	} else {

	}
	 	$ann_id = $_SESSION['ann_id'];

	if ($_POST["l1"] > 0) {

		for ($i = 0; $i < $_POST["l1"]; $i++) {

			$row_all = 0;

			$query_gene = mysqli_query($connect, "SELECT * FROM `calendar` WHERE date = '" . $_POST["D1"][$i] . "'
			AND announce_id = $ann_id;
			");

			$row_all = mysqli_num_rows($query_gene);

			if ($row_all > 0) {

				$query_update = mysqli_query($connect, "UPDATE `calendar` SET status =  '1'  
			 	WHERE date = '" . $_POST["D1"][$i] . "'
				AND announce_id =$ann_id;
				");

				if (!$query_update) {
					$data["error"] = true;
					$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

				} else {
					$data["error"] = false;
					$data["update"] = "new.php";

				}

			} else {
				$query = mysqli_query($connect, "INSERT INTO `calendar` (`announce_id`
 				, `date`
 				, `status`)
 				VALUES ( $ann_id
 				, '" . $_POST["D1"][$i] . "'
 				, '1');
 				");

				if (!$query) {
					$data["error"] = true;
					$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

				} else {
					$data["error"] = false;
					$data["update"] = "new.php";

				}

			}

		}
	}

	if ($_POST["l2"] > 0) {

		for ($i = 0; $i < $_POST["l2"]; $i++) {

			$row_all = 0;

			$query_gene = mysqli_query($connect, "SELECT * FROM `calendar` WHERE date = '" . $_POST["D2"][$i] . "'
			AND announce_id =$ann_id;
			");

			$row_all = mysqli_num_rows($query_gene);

			if ($row_all > 0) {

				$query_update = mysqli_query($connect, "UPDATE `calendar` SET status =  '0'  
			 	WHERE date = '" . $_POST["D2"][$i] . "'
				AND announce_id =$ann_id; 
				");

				if (!$query_update) {
					$data["error"] = true;
					$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

				} else {
					$data["error"] = false;
					$data["update"] = "new.php";

				}

			} else {
				$query = mysqli_query($connect, "INSERT INTO `calendar` (`announce_id`
 				, `date`
 				, `status`)
 				VALUES ( $ann_id
 				, '" . $_POST["D2"][$i] . "'
 				, '1');
 				");

				if (!$query) {
					$data["error"] = true;
					$data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";

				} else {
					$data["error"] = false;
					$data["update"] = "new.php";

				}

			}

		}
	}

}

if ($_POST["mode"] == "ready") {

	//$mem_user = $_SESSION['mem_id'];

	$query = mysqli_query($connect, "UPDATE `announces` SET ann_status =  1
			WHERE announce_id = '" . $_POST["id"] . "' 
			");

	if (!$query) {
		$data["error"] = true;
		$data["msg"] = "เกิดความผิดพลาดกรุณาติดต่อผู้ดูแลระบบ";

	} else {
		$data["error"] = false;
		//$data["update"] = "booking.php";

	}
}


// else if ($_POST["mode"] == "update_manage-cl") {
//
// $mem_user = $_SESSION['mem_id'];
//
// include ("process/Select_Announce.php");
//
// $ann_id = $_SESSION['ann_id'];
//
// $conn_query_a = mysqli_query($connect, "SELECT * FROM `manage-cld` WHERE announce_id =  $ann_id ");
//
// $row_a = mysqli_fetch_assoc($conn_query_a);
//
// $introw_a = mysqli_num_rows($conn_query_a);
//
// if ($introw_a > 0) {
// $_SESSION['ann_id_check'] = $row_a["announce_id"];
//
// } else {
// $_SESSION['ann_id_check'] = "";
// }
//
// if ($_SESSION['ann_id_check'] == "") {
// for ($i = 1; $i <= 7; $i++) {
// $query = mysqli_query($connect, "INSERT INTO `manage-cld` (`day`
// , `announce_id`
// , `status`)
// VALUES ( '" . $i . "'
// , '" . $ann_id . "'
// , '1');
// ");
//
// if (!$query) {
// $data["error"] = true;
// $data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";
//
// } else {
// $data["error"] = false;
// $data["update"] = "manage-cl.php";
//
// }
// }
// } else {
//
// $query = mysqli_query($connect, "UPDATE `manage-cld` SET status = 0
// WHERE announce_id = $ann_id ");
//
// if (!$query) {
// $data["error"] = true;
// $data["msg"] = "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง";
//
// } else {
// $data["error"] = false;
// $data["update"] = "manage-cl.php";
//
// }
//
// }
//
// }

echo json_encode($data);

require ("../config/close.php");
?>
