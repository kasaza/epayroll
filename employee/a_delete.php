<?php
$connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
if(isset($_POST["id"]))
{
 $query = "DELETE FROM tbl_users WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
 header("Location: advanced"); 
 }
}
?>