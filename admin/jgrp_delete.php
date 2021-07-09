<?php
	$connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
	if(isset($_POST["jgrp_id"]))
	{
	 $query = "DELETE FROM jobgroup WHERE jgrp_id = '".$_POST["jgrp_id"]."'";
	 if(mysqli_query($connect, $query))
	 {
	 header("Location: earnings"); 
	 }
	}
?>