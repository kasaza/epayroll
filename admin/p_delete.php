<?php
$connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
if(isset($_POST["p_id"]))
{
 $query = "DELETE FROM payroll WHERE p_id = '".$_POST["p_id"]."'";
 if(mysqli_query($connect, $query))
 {
 header("Location: payroll"); 
 }
}
?>