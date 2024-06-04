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
      $query = "SELECT * FROM departments WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= ' 
				<tr>  
                     <td><label>Department Name</label></td>  
                     <td>'.$row["department"].'</td>  
                </tr>
				<tr>  
                     <td><label>Sub-Departments</label></td>  
                     <td>'.$row["sub"].'</td>  
                </tr> 
				 <tr>  
                     <td><label>Departmental Head</label></td>  
                     <td>'.$row["head"].'</td>  
                </tr>
                <tr>  
                     <td><label>ID Number</label></td>  
                     <td>'.$row["id_no"].'</td>  
                </tr>  
                <tr>  
                     <td><label>Phone Number</label></td>  
                     <td>'.$row["phone"].'</td>  
                </tr> 
				<tr>  
                     <td><label>Assistant ID Number</label></td>  
                     <td>'.$row["id_no2"].' </td>  
                </tr>
                <tr>  
                     <td><label>Departmental Assistant</label></td>  
                     <td>'.$row["assistant"].' </td>  
                </tr> 
				<tr>  
                     <td><label>Assistant Phone Number</label></td>  
                     <td>'.$row["phone2"].' </td>  
                </tr>
				
				<tr>  
                     <td><label>Total Number of Staff</label></td>  
                     <td>Ksh. '.$row["staff"].' Montly</td>  
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
 