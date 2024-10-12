<?php
$ip = $_SERVER['REMOTE_ADDR']; // Get the visitor's IP address
$date = date('Y-m-d H:i:s'); // Get the current date and time

// Open the log file to append data
$file = fopen("ip_log.txt", "a");
fwrite($file, "IP: $ip - Date: $date\n");
fclose($file);
?>
