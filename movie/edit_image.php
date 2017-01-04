<?php include 'admin_header.php'; ?>
<head><title>Edit Movie</title></head>
<?php
$database = 'moviegallery';
$table_name = 'movie';
$movieCode = $_POST["MovieID"];

echo "  <form role=\"form\" class=\"form-horizontal\"
action=\"admin_movie_edit_image.php\" method=\"post\">\n";
echo "    <fieldset>\n";
echo "    <legend> Edit Image </legend>\n";
echo " <input type=\"hidden\" value=\"$movieCode\" name=\"movID\"/>";

echo "      <div class=\"form-group\">\n";
echo "      <div class=\"col-sm-4\">\n";
echo "      <input class=\"form-control\" id=\"ex2\" type=\"file\"
 name=\"imageNew\"\n";
echo "      accept=\"image/*\"  data-toggle=\"tooltip\"
title=\"Poster's Movie\">\n";
echo "    </div>\n";
echo "      </div>\n";
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
echo "  </fieldset>\n";
echo "      </form>\n";


?>
<?php include 'admin_footer.php'; ?>
