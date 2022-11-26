<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'webdulich');
$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
mysqli_set_charset($con, 'UTF8');
?>