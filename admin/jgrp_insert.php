<?php  
<<<<<<< HEAD
 $connect = mysqli_connect("localhost", "root", "", "hrm");  
=======
 $connect = mysqli_connect("remotemysql.com", "TFAhTVfagm", "6khKBw8IRi", "TFAhTVfagm");  
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
 if(!empty($_POST))  
 {  
      $output = '';  
	  $jgrp_name = mysqli_real_escape_string($connect, $_POST["jgrp_name"]);
	  $jgrp_amount = mysqli_real_escape_string($connect, $_POST["jgrp_amount"]);
      if($_POST["employee_id2"] != '')  
      {  
           $query = "  
           UPDATE jobgroup   
           SET jgrp_name ='$jgrp_name',  
           jgrp_amount = '$jgrp_amount'
           WHERE jgrp_id='".$_POST["employee_id2"]."'";  
      }  
      else  
      {  
           $query = "  
           INSERT INTO jobgroup(jgrp_name, jgrp_amount)  
           VALUES('$jgrp_name', '$jgrp_amount');  
           ";  
      }
      if(mysqli_query($connect, $query))  
      {  
           $select_query = "SELECT * FROM jobgroup ORDER BY jgrp_id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr> <th>Name</th>
						  <th>Amount</th>
                          <th>Action</th>
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr> <td>' . $row["jgrp_name"] . '</td> 
                          <td>' . $row["jgrp_amount"] . '</td>
						  <td>
						  <div class="btn-group">
                          <button data-toggle="dropdown" class="btn btn-danger btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                          <ul class="dropdown-menu">
							<li><input type="button" name="edit" value="Edit" id="'.$row["jgrp_id"] .'" class="btn btn-warning btn-xs edit_data action" /></li>
							<li class="divider"></li>
							<li><input type="button" name="delete" value="Delete" id="' . $row["jgrp_id"] . '" class="btn btn-danger btn-xs delete_data action" /></li>
                          </ul>
                          </div>
						  </td>
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;
 }  
 ?>
 