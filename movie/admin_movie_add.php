<<?php include 'admin_header.php'; ?>
<?php
 $title = $_POST["title"];
  $image = $_POST["image"];
 $category = $_POST["category"];
 $movDesc = $_POST["movDesc"];
 $pubDate = $_POST["pubDate"];
 $database = 'moviegallery';
 $table_name = 'movie';
if (!$connect)
{
  die ("Cannot connect to $server using $user");
   }
   else
   {
    	$query = "INSERT INTO $table_name
      VALUES ('0','$title','$image', '$category'
        , '$movDesc', '$pubDate')";
 mysqli_select_db($connect, $database);
    	if (mysqli_query($connect, $query))
   	{
   			print "<div class=\"green\">Insert into $database was successful!</font></div>";
    	}
      else
      	{
      			print "<div class=\"orange\">Insert into $database failed!</font></div>";
            print mysqli_error($connect);
        }

      }
      echo "    <form action=\"admin_add_artist_for_movie.php\" method=\"post\" role=\"form\" class=\"form-horizontal\" >\n";
      echo "      <fieldset>\n";
      echo "      <legend>Add Artist For Movie</legend>\n";
      echo "\n";
      echo "              <script>\n";
      echo "          $(document).ready(function(){\n";
      echo "              $('[data-toggle=\"tooltip\"]').tooltip();\n";
      echo "          });\n";
      echo "          </script>\n";
      echo "<input value=\"$title\" type=\"hidden\" name=\"title\"/>";
      echo "<input value=\"$image\" type=\"hidden\" name=\"image\"/>";
      echo "<input value=\"$pubDate\" type=\"hidden\" name=\"pubDate\"/>";
      echo "<input value=\"$category\" type=\"hidden\" name=\"category\"/>";
      echo "<input value=\"$movDesc\" type=\"hidden\" name=\"movDesc\"/>";

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

      ?>
      <?php include 'admin_footer.php'; ?>
