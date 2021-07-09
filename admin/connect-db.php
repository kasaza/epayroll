<?php

// server info
$server = 'remotemysql.com';
$user = 'TFAhTVfagm';
$pass = '6khKBw8IRi';
$db = 'TFAhTVfagm';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

?>