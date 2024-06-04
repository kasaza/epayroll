  <?php  
 //view.php  
<<<<<<< HEAD
 $connect = mysqli_connect("localhost", "root", "", "hrm");  
=======
 $connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM banks WHERE bnk_id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 
?>