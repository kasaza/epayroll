<?php
	$connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
	if(isset($_POST["ded_id"]))
	{
	 $query = "DELETE FROM deductions WHERE ded_id = '".$_POST["ded_id"]."'";
	 if(mysqli_query($connect, $query))
	 {
	 header("Location: deductions"); 
	 }
	}
?>