<?php
<<<<<<< HEAD
$connect = mysqli_connect("localhost", "root", "", "hrm");
if(isset($_POST["jgrp_id"]))
{
 $query = "DELETE FROM jobgroup WHERE jgrp_id = '".$_POST["jgrp_id"]."'";
 if(mysqli_query($connect, $query))
 {
 header("Location: earnings.php"); 
 }
}
=======
	$connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
	if(isset($_POST["jgrp_id"]))
	{
	 $query = "DELETE FROM jobgroup WHERE jgrp_id = '".$_POST["jgrp_id"]."'";
	 if(mysqli_query($connect, $query))
	 {
	 header("Location: earnings"); 
	 }
	}
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
?>