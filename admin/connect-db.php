<?php

// server info
<<<<<<< HEAD
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'hrm';
=======
$server = 'remotemysql.com';
$user = 'TFAhTVfagm';
$pass = '6khKBw8IRi';
$db = 'TFAhTVfagm';
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

?>