  <?php  
 //view.php  
 $connect = mysqli_connect("localhost", "root", "", "hrm");  
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM deductions WHERE ded_id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 
?>