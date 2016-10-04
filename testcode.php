<?php
$date = '10/05/2016';
$date = preg_replace('#(\d{2})/(\d{2})/(\d{4})#', '$3-$1-$2', $date);
echo $date;
?>