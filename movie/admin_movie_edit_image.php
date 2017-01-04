<html><head><title>Update Movie Results</title></head><body>
 <?php
 include 'admin_header.php';
 $database = 'moviegallery';
 $table_name = 'movie';

 $movieCode = $_POST["movID"];
 $imageNew = $_POST["imageNew"];

$query1 = "UPDATE $table_name
SET image = '$imageNew'

     WHERE (movieCode='$movieCode')";
     mysqli_select_db($connect, $database);
$query2 = "SELECT * FROM $table_name WHERE  (movieCode='$movieCode')";
     if (mysqli_query($connect, $query1))
     {
       echo "<div class=\"alert alert-danger\">\n";
       echo "  <strong>Updated</strong>\n";
       echo "</div>\n";
       $results = mysqli_query($connect, $query2);
       print '<table>';
       print '<th>Detail <th> MovieID <th> MovieName
        <th> MovieImage <th> MovieCategory
       <th> MovieDescription <th> MoviePublishDate';
      while( $row = mysqli_fetch_row($results)){
       print '<tr>';
       $i=0;
       foreach ($row as $field) {
         if($i===0){
           print "<td>
           <form action=\"admin_movie_detail.php\" method=\"post\">
             <input type=\"hidden\" name=\"MovieID\"
              value=\"$field\">
             <input type=\"submit\" value=\"Read more\"/>
           </form>
           </td>";
           print "<td>$field</td>";
           $i++;
      }
      else {
         print "<td>$field</td> ";
      }
       }
       print '<tr>';
     }
   print '</table>';
 }

      else
       {
           print "<div class=\"orange\">Insert into $database failed!</font></div>";
            echo mysqli_error($connect);
        }

 mysqli_close($connect);




include 'admin_footer.php';

 ?> </body></html>
