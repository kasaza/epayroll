
 
<?php
  $conn = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
  $request=$_POST['request'];
  $query="select * from tbl_employee where id_no='$request'";
  $output=mysqli_query($conn,$query);

  while($fetch = mysqli_fetch_assoc($output))
  { 
	echo $fetch['account'];
  }
 ?>
 