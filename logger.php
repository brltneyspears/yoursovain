<?php
date_default_timezone_set('America/New_York');
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');
$log = $ip . " - " . $date . "\n";
file_put_contents("ips.txt", $log, FILE_APPEND);
echo "IP logged successfully!";
?>
