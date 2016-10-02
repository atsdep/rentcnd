<?php

	
		$query_ann = mysqli_query($connect, "SELECT category_name FROM `car_category` INNER JOINT `car_gene` ON car_category.category_id = car_gene.car_category 
		WHERE Orders.OrderID = 10248;
		
		");
	
		//$result_ann = mysqli_fetch_assoc($query_ann);
	

?>