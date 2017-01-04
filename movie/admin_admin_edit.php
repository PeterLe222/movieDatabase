<?php include 'admin_header.php'; ?>
<?php

 $database = 'moviegallery';
 $table_name = 'users';
 $userId = $_POST["userId"];
 $query = "SELECT * FROM $table_name WHERE userId ='$userId' ";
 mysqli_select_db($connect, $database);
 $results = mysqli_query($connect, $query);
 $info = mysqli_fetch_array($results);
 $firstName = $info['firstName'];
 $lastName = $info['lastName'];
 $username = $info['username'];
 $email = $info['email'];
 $usertype = $info['usertype'];


echo "      <form role=\"form\" class=\"form-horizontal\"
 action=\"edit_admin.php\" method=\"post\">\n";
echo "        <fieldset>\n";
echo "        <legend> <h2>Edit Admin</h2></legend>\n";
echo "          <input  type=\"hidden\" name=\"userId\"
                    value= \"$userId\">\n";

echo "        <div class=\"form-group\">\n";
echo "        <div class=\"col-sm-4\">\n";
echo "          <input placeholder=\"Firstname\" class=\"form-control\"
 id=\"ex2\" type=\"text\" name=\"firstName\" required value= \"$firstName\">\n";
echo "        </div>\n";
echo "          </div>\n";
echo "\n";
echo "          <div class=\"form-group\">\n";
echo "          <div class=\"col-sm-4\">\n";
echo "\n";
echo "\n";
echo "          <input placeholder=\"Lastname\" class=\"form-control\"
id=\"ex2\" type=\"text\" name=\"lastName\" required value= \"$lastName\">\n";
echo "        </div>\n";
echo "          </div>\n";
echo "\n";
echo "          <div class=\"form-group\">\n";
echo "          <div class=\"col-sm-4\">\n";
echo "\n";
echo "\n";
echo "          <input placeholder=\"Username\" class=\"form-control\"
 id=\"ex2\" type=\"text\" name=\"username\" required value= \"$username\">\n";
echo "        </div>\n";
echo "          </div>\n";
echo "\n";
echo "          <div class=\"form-group\">\n";
echo "          <div class=\"col-sm-4\">\n";
echo "      <input id=\"pass1\"  type=\"password\"
 name=\"password\" placeholder=\"Password\" required>\n";
 echo "    </div>\n";
echo "    </div>\n";
echo "          <div class=\"form-group\">\n";
echo "          <div class=\"col-sm-4\">\n";
echo "\n";
echo "\n";
echo "      <input id= \"pass2\"  type=\"password\"
 name=\"confirmpassword\" onkeyup= \"check(); return false;\"
 placeholder=\"Confirm Password\" required>\n";
 echo"<span class = \"icon\" id=\"icon\"></span> ";
echo "    </div>\n";
echo "      </div>\n";

echo "<script>

function check()
{
  var pass1 = document.getElementById('pass1');
var pass2 = document.getElementById('pass2');

if (pass1.value == pass2.value) {
  document.getElementById(\"icon\").className = \"glyphicon glyphicon-ok\";
}else {
  document.getElementById(\"icon\").className = \"glyphicon glyphicon-remove\";
}

}
</script>";


echo "\n";
echo "      <div class=\"form-group\">\n";
echo "      <div class=\"col-sm-4\">\n";
echo "\n";
echo "      <input placeholder=\"Email\" class=\"form-control\"
id=\"ex2\" type=\"email\" name=\"email\" value= \"$email\">\n";
echo "    </div>\n";
echo "      </div>\n";
echo "\n";
echo "      <div class=\"form-group\">\n";
echo "      <div class=\"col-sm-4\">\n";
echo "\n";
echo "      <input placeholder=\"Usertype\" class=\"form-control\"
 id=\"ex2\" type=\"number\" name=\"usertype\" value= \"$usertype\">\n";
echo "    </div>\n";
echo "      </div>\n";
echo "\n";
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
echo "  \n";
echo "      <input class=\"btn btn-primary\" type=\"reset\" value=\"Clear\">\n";
echo "    </fieldset>\n";
echo "    </form>\n";
echo "\n";
?>
<?php include 'admin_footer.php'; ?>
