
<?php include 'admin_header.php'; ?>
<head><title>Admin - Movie List</title></head>
 <?php


 $database = 'moviegallery';
 $table_name = 'movie';

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
 			 print '<th> MovieID <th> MovieName <th> MovieImage
        <th> MovieCategory <th> MovieDescription
        <th> MoviePublishDate<th>Details<th>Edit<th>Delete';
       while ($row = mysqli_fetch_row($results_id))
       	 		{
              print '<tr>';
              $i=0;
              foreach ($row as $field) {
                if($i===0){

                  print "<td>$field</td>";
                  $ima = $field;
                  $i++;
                }
                elseif ($i===2) {

                  print "<td>
                  $field

                  <form action=\"edit_image.php\" method=\"post\" class=\"input\">
                    <input type=\"hidden\" name=\"MovieID\"
                    placeholder=\"Input Movie ID\" value=\"$ima\">
                    <input type=\"submit\" value = \"Edit\">
                  </form>
                  </td>";
                  $i++;
                }

                else {

                   print "<td>$field</td> ";
                   $i++;
                }

              }
              print "<td>
              <form action=\"admin_movie_detail.php\" method=\"post\" class=\"input\">
                <input type=\"hidden\" name=\"MovieID\"
                placeholder=\"Input Movie ID\" value=\"$ima\">
                <input type=\"submit\" value=\"...\"/>
              </form>
              </td>";

              print "<td>
              <form action=\"edit_movie.php\" method=\"post\" class=\"input\">
                <input type=\"hidden\" name=\"MovieID\"
                placeholder=\"Input Movie ID\" value=\"$ima\">
                <input type=\"submit\" value=\"Edit\"/>
              </form>
              </td>";

              print "
             <td>

            <form action=\"admin_movie_delete.php\" method=\"post\" class=\"delete\">
            <input type=\"hidden\"
             value=\"$ima\" name=\"ID\">
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

    ?>
   </table>
<?php include 'admin_footer.php'; ?>
