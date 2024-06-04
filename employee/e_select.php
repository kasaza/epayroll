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
      $query = "SELECT * FROM tbl_employee WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= ' 
				<tr>  
                     <td><label>ID Number</label></td>  
                     <td>'.$row["id_no"].'</td>  
                </tr>
				<tr>  
                     <td><label>Last Name</label></td>  
                     <td>'.$row["name"].'</td>  
                </tr> 
				<tr>  
                     <td><label>Gender</label></td>  
                     <td>'.$row["gender"].'</td>  
                </tr>
                <tr>  
                     <td><label>Phone Number</label></td>  
                     <td>'.$row["phone"].'</td>  
                </tr>  
                <tr>  
                     <td><label>Email Address</label></td>  
                     <td>'.$row["email"].'</td>  
                </tr>  
                <tr>  
                     <td><label>Date</label></td>  
                     <td>'.$row["date"].' </td>  
                </tr> 
				<tr>  
                     <td><label>Employee Type</label></td>  
                     <td>'.$row["type"].' </td>  
                </tr>
				<tr>  
                     <td><label>Department</label></td>  
                     <td>'.$row["department"].' </td>  
                </tr>
				<tr>  
                     <td><label>Bank</label></td>  
                     <td>'.$row["bank"].' </td>  
                </tr>
				<tr>  
                     <td><label>Account No.</label></td>  
                     <td>'.$row["account"].' </td>  
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
 