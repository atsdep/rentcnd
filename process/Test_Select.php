<?php
$sql="SELECT * FROM members";
$result=mysqli_query($connect,$sql);

// Associative array
$row=mysqli_fetch_assoc($result);
echo($row["member_id"]);
echo($row["mem_name"]);

// Free result set
mysqli_free_result($result);

?>