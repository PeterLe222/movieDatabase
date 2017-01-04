<title>Latest Movie</title>
 <?php
 include 'connect.php';
 include 'header.php';
 $database = 'moviegallery';
 $table_name = 'movie';

 if (!$connect)
 {
        die ("Cannot connect to $server using $user");
  }

 else
 {

 	 $query = "SELECT * FROM $table_name ORDER BY publishDate DESC";


	 mysqli_select_db($connect, $database);

	 $results_id = mysqli_query($connect, $query);
	 if ($results_id)
	 {
			 print '<table border=1>';
 			 print '<th> MovieID <th> MovieName
       <th> MovieCategory <th> MovieDescription
       <th> MoviePublishDate<th>Detail</th>';
       while ($row = mysqli_fetch_row($results_id))
       	 		{
              print '<tr>';
              $i=0;
              foreach ($row as $field) {
                if($i===0){
                  $de = $field;
                  print "<td>$field</td>";
                  $i++;
             }
             elseif($i===2){
               $i++;
             }
             else {
                print "<td>$field</td> ";
                $i++;
             }

           }print "<td>
           <form action=\"detail.php\" method=\"post\" class=\"input\">
             <input type=\"hidden\" name=\"MovieID\"
             placeholder=\"Input Movie ID\"/ value=\"$de\">
             <input type=\"submit\" value=\"...\"/>
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
    include 'footer.php';
    ?>
   </table>
