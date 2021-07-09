  <?php  
 //view.php  
 $connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");   
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM departments WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 
?>