<?php include 'admin_header.php'; ?>
<head><title>Admin - Artist List</title></head>
 <?php

 $database = 'moviegallery';
 $table_name = 'artist';

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
 			 print '<th> ArtistId <th> Firstname <th> Lastname
       <th> DateOfBirth <th> Nationality <th> Other Info<th>Delete';
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

           <form action=\"admin_artist_delete.php\" method=\"post\" class=\"delete\">
           <input type=\"hidden\"
            value=\"$detail\" name=\"ArtistID\">
            <input type=\"submit\" value=\"Delete\"
             onclick=\"return confirm('Are you sure you want to delete this item?');\" >
            </form>

             </td>";
             print '</tr>';
           }

        }
          else
   	 {
   			die ("Query=$query failed!");
   		}
   	 mysqli_close($connect);
   }
print "</table>";
    ?>

   <?php  include 'admin_footer.php'; ?>
