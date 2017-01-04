<?php include 'admin_header.php'; ?>
<head><title>Edit Movie</title></head>
<?php
$database = 'moviegallery';
$table_name = 'movie';
$movieCode = $_POST["MovieID"];
$query = "SELECT * FROM $table_name WHERE movieCode ='$movieCode' ";
mysqli_select_db($connect, $database);
$results = mysqli_query($connect, $query);
$info = mysqli_fetch_array($results);
$title = $info['title'];
$category = $info['category'];
$modes = $info['movieDesc'];
$pubdat = $info['publishDate'];

echo "  <form role=\"form\" class=\"form-horizontal\" action=\"admin_movie_edit.php\" method=\"post\">\n";
echo "    <fieldset>\n";
echo "    <legend> Edit Movie </legend>\n";
echo " <input type=\"hidden\" value=\"$movieCode\" name=\"movID\"/>";
echo "    <div class=\"form-group\">\n";
echo "    <div class=\"col-sm-4\">\n";
echo "      <input class=\"form-control\" id=\"ex2\" type=\"text\"
          name=\"movNameNew\"\n";
echo "      placeholder=\"Title\" value=\"$title\">\n";
echo "    </div>\n";
echo "      </div>\n";
echo "      <div class=\"form-group\">\n";
echo "      <div class=\"col-sm-4\">\n";
echo "  <select class=\"form-control\" id=\"sel1\"
data-toggle=\"tooltip\" title=\"Category\"
name=\"categoryNew\" >\n";
echo "            <option>$category</option>\n";
echo "            <option>Action</option>\n";
echo "            <option>Horror</option>\n";
echo "            <option>Comedy</option>\n";
echo "          </select>\n";
echo "    </div>\n";
echo "      </div>\n";
echo "      <div class=\"form-group\">\n";
echo "      <div class=\"col-sm-4\">\n";
echo "   <textarea class=\"form-control\" value=\"\"
name=\"movDescNew\" rows=\"5\" cols=\"55\"
placeholder=\"Description\">$modes</textarea>";
echo "    </div>\n";
echo "      </div>\n";
echo "      <div class=\"form-group\">\n";
echo "      <div class=\"col-sm-4\">\n";
echo "      <input class=\"form-control\" id=\"ex2\" type=\"date\"
      name=\"pubDateNew\"\n";
echo "      placeholder=\"Publish date\" value=\"$pubdat\" data-toggle=\"tooltip\" title=\"Publish Date\">\n";
echo "    </div>\n";
echo "      </div>\n";
echo "\n";
echo "\n";
echo "<!-- Trigger the modal with a button -->\n";
echo "  <button type=\"button\" class=\"btn btn-info btn-lg\"
data-toggle=\"modal\" data-target=\"#myModal\">Update</button>\n";
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
echo "      <input class=\"btn btn-primary\" type=\"reset\"
value=\"Clear\">\n";

echo "  </fieldset>\n";
echo "      </form>\n";
echo "\n";
echo "\n";
echo "\n";

?>
<?php include 'admin_footer.php'; ?>
