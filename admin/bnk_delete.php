<?php
$connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
if(isset($_POST["bnk_id"]))
{
 $query = "DELETE FROM banks WHERE bnk_id = '".$_POST["bnk_id"]."'";
 if(mysqli_query($connect, $query))
 {
 header("Location: banks"); 
 }
}
?>