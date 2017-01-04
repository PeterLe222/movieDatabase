<?php include 'admin_header.php'; ?>
<head><title>Add Artist</title></head>
<?php


echo "  <form role=\"form\" class=\"form-horizontal\"  action=\"admin_artist_add.php\" method=\"post\">\n";
echo "    <fieldset>\n";
echo "  <legend><h2> Add Artist</h2></legend>\n";
echo "  <div class=\"form-group\">\n";
echo "  <div class=\"col-sm-4\">\n";
echo "\n";
echo "    <input class=\"form-control\" id=\"ex2\" type=\"text\"\n
   name=\"fName\" placeholder=\"Firstname\" required>\n";
echo "  </div>\n";
echo "    </div>\n";
echo "    <div class=\"form-group\">\n";
echo "    <div class=\"col-sm-4\">\n";
echo "    <input class=\"form-control\" id=\"ex2\" type=\"text\"\n
   name=\"lName\" placeholder=\"Lastname\" required>\n";
echo "  </div>\n";
echo "    </div>\n";
echo "    <div class=\"form-group\">\n";
echo "    <div class=\"col-sm-4\">\n";
echo "    <input class=\"form-control\" id=\"ex2\" type=\"date\"\n
    name=\"DOB\" placeholder=\"Date Of Birth\"\n
   data-toggle=\"tooltip\" title=\"Date Of Birth\" required>\n";
echo "  </div>\n";
echo "    </div>\n";
echo "    <div class=\"form-group\">\n";
echo "    <div class=\"col-sm-4\">\n";
echo "    <input class=\"form-control\" id=\"ex2\" type=\"text\"\n";
echo "    name=\"nationality\" placeholder=\"Nationality\">\n";
echo "  </div>\n";
echo "    </div>\n";
echo "    <div class=\"form-group\">\n";
echo "    <div class=\"col-sm-4\">\n";
echo "    <input class=\"form-control\" id=\"ex2\" type=\"text\"\n";
echo "     name=\"info\" placeholder=\"Other Info\">\n";
echo "  </div>\n";
echo "    </div>\n";
echo "\n";
echo "\n";
echo "\n";
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
echo "  <input class=\"btn btn-primary\" type=\"reset\" value=\"Clear\">\n";
echo "</fieldset>\n";
echo "</form>\n";
echo "\n";
?>
<?php include 'admin_footer.php'; ?>
