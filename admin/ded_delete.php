<?php
<<<<<<< HEAD
$connect = mysqli_connect("localhost", "root", "", "hrm");
if(isset($_POST["ded_id"]))
{
 $query = "DELETE FROM deductions WHERE ded_id = '".$_POST["ded_id"]."'";
 if(mysqli_query($connect, $query))
 {
 header("Location: deductions.php"); 
 }
}
=======
	$connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
	if(isset($_POST["ded_id"]))
	{
	 $query = "DELETE FROM deductions WHERE ded_id = '".$_POST["ded_id"]."'";
	 if(mysqli_query($connect, $query))
	 {
	 header("Location: deductions"); 
	 }
	}
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
?>