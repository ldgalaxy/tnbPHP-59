<?php

$time = time();
$time_now = date('d M Y @ H:i:s', $time);
$time_modified = date('d M Y @ H:i:s', strtotime('+1 year'));

echo 'The time now is ' . $time_now . '<br>' . 'The time modified is ' . $time_modified;

//echo $actual_time;


?>
