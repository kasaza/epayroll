<?php
<<<<<<< HEAD
$connect = mysqli_connect("localhost", "root", "", "hrm");
=======
$connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
if(isset($_POST["id"]))
{
 $query = "DELETE FROM tbl_employee WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
<<<<<<< HEAD
 header("Location: employee.php"); 
=======
 header("Location: employee"); 
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
 }
}
?>