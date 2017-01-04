<html><head><title>Update Movie Results</title></head><body>
 <?php
 include 'admin_header.php';
 $database = 'moviegallery';
 $table_name = 'movie';

 $movieCode = $_POST["movID"];
 $movNameNew = $_POST["movNameNew"];
 $categoryNew = $_POST["categoryNew"];
 $movDescNew = $_POST["movDescNew"];
 $pubDateNew = $_POST["pubDateNew"];


 //input infor to check
$query2 = "UPDATE $table_name
SET title = '$movNameNew', publishDate = '$pubDateNew',
movieDesc = '$movDescNew', category = '$categoryNew'
   WHERE (movieCode='$movieCode')";
   mysqli_select_db($connect, $database);
   $query = "SELECT * from $table_name WHERE (movieCode = '$movieCode')";

   if (mysqli_query($connect, $query2))
   {
     echo "<div class=\"alert alert-danger\">\n";
     echo "  <strong>Updated</strong>\n";
     echo "</div>\n";
     $results_id = mysqli_query($connect, $query);

     print '<table border=1><th> MovieID <th> MovieName
     <th> MovieImage <th> MovieCategory <th> MovieDescription
      <th> MoviePublishDate<th>Detail';
     while ($row = mysqli_fetch_row($results_id)) {
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
            placeholder=\"Input Movie ID\" value=\"$ima\" >
            <input type=\"submit\" value=\"Edit\">
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
        placeholder=\"Input Movie ID\" value=\"$ima\" >
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

     echo "    <form action=\"admin_add_artist_for_movie_update.php\" method=\"post\" role=\"form\" class=\"form-horizontal\" >\n";
     echo "      <fieldset>\n";
     echo "      <legend>Add Artist For Movie</legend>\n";
     echo "\n";
     echo "              <script>\n";
     echo "          $(document).ready(function(){\n";
     echo "              $('[data-toggle=\"tooltip\"]').tooltip();\n";
     echo "          });\n";
     echo "          </script>\n";
     echo "<input value=\"$movNameNew\" type=\"hidden\" name=\"title\"/>";
     echo "<input value=\"$pubDateNew\" type=\"hidden\" name=\"pubDate\"/>";
     echo "<input value=\"$categoryNew\" type=\"hidden\" name=\"category\"/>";
     echo "<input value=\"$movDescNew\" type=\"hidden\" name=\"movDesc\"/>";
     for($i=1;$i<4;$i++){


       $query1 = "SELECT firstName FROM artist";
       $query2 = "SELECT lastName FROM artist";
       mysqli_select_db($connect, $database);
       $results_id = mysqli_query($connect, $query1);
       $results_id2 = mysqli_query($connect, $query2);

       if ($results_id)
       {
         print "Artist $i";
         print '<div class="form-group">';
         echo "      <div class=\"col-sm-4\">\n";

           print "<select class=\"form-control\" id=\"sel1\"
           data-toggle=\"tooltip\" title=\"Firstname of Artist\"
           name=\"fName$i\">";
           print "<option></option> ";
           while ($row = mysqli_fetch_row($results_id))
                {
                    foreach ($row as $field){

                     print "<option>$field</option> ";
                    }
                   }

                  print '</select>';
                  echo "      </div>\n";
                  print '</div>';

              }
              else
         {
            die ("Query=$query1 failed!");
          }
          if ($results_id2)
          {
            print '<div class="form-group">';
            echo "      <div class=\"col-sm-4\">\n";
            print "<select class=\"form-control\" id=\"sel1\"
            data-toggle=\"tooltip\" title=\"Lastname of Artist\"
            name=\"lName$i\">";
            print "<option></option> ";
              while ($row2 = mysqli_fetch_row($results_id2))
                   {
                       foreach ($row2 as $field2){

                        print "<option>$field2</option> ";
                       }
                      }

                     print '</select>';
                     echo "      </div>\n";
                     print '</div>';

                 }
                 else
            {
               die ("Query=$query2 failed!");
             }
           }
             mysqli_close ($connect);
             echo "<!-- Trigger the modal with a button -->\n";
             echo "  <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">ADD</button>\n";
             echo "\n";
             echo "  <!-- Modal -->\n";
             echo "  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">\n";
             echo "    <div class=\"modal-dialog\">\n";
             echo "    \n";
             echo "      <!-- Modal content-->\n";
             echo "      <div class=\"modal-content\">\n";
             echo "        \n";
             echo "        <div class=\"modal-body\">\n";
             echo "          <p>Are you sure?</p>\n";
             echo "        </div>\n";
             echo "        <div class=\"modal-footer\">\n";
             echo "        <button type=\"submit\" class=\"btn btn-default\" >Ok</button>\n";
             echo "          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\n";
             echo " \n";
             echo "        </div>\n";
             echo " \n";
             echo "     \n";
             echo "     \n";
             echo "      </div>\n";
             echo "      \n";
             echo "    </div>\n";
             echo "  </div>\n";
             echo "  \n";
          echo "    <input class=\"btn btn-primary\" type=\"reset\" value=\"Clear\">\n";
          echo "  </fieldset>\n";
          echo "  </form>\n";




include 'admin_footer.php';

 ?> </body></html>
