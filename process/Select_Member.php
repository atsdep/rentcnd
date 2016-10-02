<?php
	
	if(isset($_SESSION['login'])){
		$query = mysqli_query($connect, "SELECT * FROM members WHERE mem_email =  '".$_SESSION['username']."' ");
		$result_mem = mysqli_fetch_assoc($query);
	}


?>