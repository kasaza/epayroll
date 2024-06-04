
 
<?php
<<<<<<< HEAD
  $conn = mysqli_connect('localhost','root','','hrm');
=======
  $conn = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
  $request=$_POST['request'];
  $query="select * from tbl_employee where id_no='$request'";
  $output=mysqli_query($conn,$query);

  while($fetch = mysqli_fetch_assoc($output))
  { 
	echo $fetch['bank'];
  }
 ?>
 