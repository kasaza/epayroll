<?php  
//view.php
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
<<<<<<< HEAD
      $connect = mysqli_connect("localhost", "root", "", "hrm");  
=======
      $connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
      $query = "SELECT * FROM allowances WHERE all_id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= ' 
				<tr>  
                     <td><label>Allowance Type</label></td>  
                     <td>'.$row["allowance"].'</td>  
                </tr>
				<tr>  
                     <td><label>Amount</label></td>  
                     <td>'.$row["all_amount"].'</td>  
                </tr> 
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 