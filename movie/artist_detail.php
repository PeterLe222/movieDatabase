<html><head><title>List Of Artist</title></head><body>
  <?php include 'header.php'; ?>
 <?php
include 'connect.php';
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
			 print '<table>';
 			 print ' <th> ArtistId <th> Firstname
       <th> Lastname <th> DateOfBirth <th> Nationality
       <th> Other Info<th>Details';
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
           print "<td>
           <form action=\"detail_artist.php\" method=\"post\" class=\"input\">
             <input type=\"hidden\" name=\"ArtistID\"
              value=\"$detail\">
             <input type=\"submit\" value=\"...\"

             />
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
  </table><?php echo "\n<br>\n"; include 'footer.php'; ?></body></html>
