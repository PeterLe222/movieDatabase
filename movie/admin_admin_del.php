<?php include 'admin_header.php'; ?>
<head><title>Delete User</title></head>
 <?php

 $database = 'moviegallery';
 $table_name = 'users';

 if (!$connect)
 {
        die ("Cannot connect to $server using $user");
  }

 else
 {
 	 $query = "SELECT * FROM $table_name";

	 mysqli_select_db($connect, $database);

	 $results_id = mysqli_query($connect, $query);
	 if ($results_id)
	 {
			 print '<table border=1>';
 			 print '<th> UserID <th> Firstname <th> Lastname
       <th> Username <th> Password <th> Email <th>Usertype<th>Delete';
       while ($row = mysqli_fetch_row($results_id))
       	 		{
        				print '<tr>';
                $i=0;
                foreach ($row as $field) {
                  if($i===0){
                    $detail = $field;
                    print "<td>$field</td>";
                    $i++;
               }
               else {
                  print "<td>$field</td> ";
               }

             }
             print "
            <td>

           <form action=\"admin_admin_delete.php\" method=\"post\" class=\"delete\">
           <input type=\"hidden\"
            value=\"$detail\" name=\"userId\">
            <input type=\"submit\" value=\"Delete\"
             onclick=\"return confirm('Are you sure you want to delete this item?');\" >
            </form>

             </td>";
             print '</tr>';        			}
        	}
          else
   	 {
   			die ("Query=$query failed!");
   		}
   	 mysqli_close($connect);
    }

    ?>
   </table>
   <?php  include 'admin_footer.php'; ?>
