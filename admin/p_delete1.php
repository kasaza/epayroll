
<?php
//delete.php
$connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
if(isset($_POST["p_id"]))
{
 foreach($_POST["p_id"] as $id)
 {
  $query = "DELETE FROM payroll WHERE p_id = '".$id."'";
  mysqli_query($connect, $query);
 }
}
?>