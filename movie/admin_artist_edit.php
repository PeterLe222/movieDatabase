<html><head><title>Update Artist Results</title></head><body>
 <?php
include 'admin_header.php';
 $database = 'moviegallery';

 $table_name = 'artist';
 $artistCode = $_POST["artistId"];
 $firstname = $_POST["fName"]; $lastname = $_POST["lName"];
 $dateOfBirth = $_POST["DOB"]; $nationality = $_POST["nationality"];
 $otherInfo = $_POST["info"];


  //input infor to check
 $query2 = "UPDATE $table_name
 SET firstName = '$firstname', LastName = '$lastname',
 dateOfBirth = '$dateOfBirth', nationality = '$nationality',
 otherInfo = '$otherInfo'
    WHERE (artistId='$artistCode')";
    mysqli_select_db($connect, $database);
    $query = "SELECT * from $table_name WHERE (artistId = '$artistCode')";

    if (mysqli_query($connect, $query2))
    {
      echo "<div class=\"alert alert-danger\">\n";
      echo "  <strong>Updated</strong>\n";
      echo "</div>\n";
      $results_id = mysqli_query($connect, $query);

      print '<table border=1>';
      print '<th> ArtistId <th> Firstname <th> Lastname
      <th> DateOfBirth <th> Nationality <th> Other Info<th>Detail';
      while ($row = mysqli_fetch_row($results_id)) {
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
    <form action=\"admin_detail_artist.php\" method=\"post\" class=\"input\">
      <input type=\"hidden\" name=\"ArtistID\"
       value=\"$detail\">
      <input type=\"submit\" value=\"Read more\"/>
    </form>
    </td>";
         print '</tr>';
       }
          print '</table>';
    }
     else
      {
          print "<div class=\"orange\">Insert into $database failed!</font></div>";
           echo mysqli_error($connect);
      }



include 'admin_footer.php';
 ?> </body></html>
