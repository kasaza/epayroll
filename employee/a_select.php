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
      $query = "SELECT * FROM tbl_users WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= ' 
				<tr>  
                     <td><label>Login ID</label></td>  
                     <td>'.$row["id"].'</td>  
                </tr>
				<tr>  
                     <td><label>Username</label></td>  
                     <td>'.$row["uname"].'</td>  
                </tr>
				<tr>  
                     <td><label>ID Number</label></td>  
                     <td>'.$row["id_no"].'</td>  
                </tr>
				 <tr>  
                     <td><label>Email</label></td>  
                     <td>'.$row["email"].'</td>  
                </tr>
				<tr>  
                     <td><label>Phone</label></td>  
                     <td>'.$row["phone"].'</td>  
                </tr>
                <tr>  
                     <td><label>Role</label></td>  
                     <td>'.$row["role"].'</td>  
                </tr>  
                <tr>  
                     <td><label>Code</label></td>  
                     <td>'.$row["password"].'</td>  
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
 