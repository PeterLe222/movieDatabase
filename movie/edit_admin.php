<html><head><title>Update User Results</title></head><body>
 <?php
include 'admin_header.php';
 $database = 'moviegallery';


 $table_name = 'users';

 $firstname = $_POST["firstName"]; $lastname = $_POST["lastName"];
 $username = $_POST["username"]; $password = $_POST["password"];
 $email = $_POST["email"]; $usertype = $_POST["usertype"];
 $userId=$_POST["userId"];

 if (!$connect)
 {
   die ("Cannot connect to $server using $user");
    }
    else
    {
     	$query2 = "UPDATE $table_name
      SET  firstName = '$firstname',
          lastName	=			'$lastname',
          username = '$username',
          password = sha1('".$password."'),
                  email = '$email',
                  usertype = '$usertype'
    WHERE userId = $userId ";

     	mysqli_select_db($connect , $database);
      $query = "SELECT * from $table_name WHERE (userId = '$userId')";

      if (mysqli_query($connect, $query2))
      {
        echo "<div class=\"alert alert-danger\">\n";
        echo "  <strong>Updated</strong>\n";
        echo "</div>\n";
        $results_id = mysqli_query($connect, $query);

        print '<table border=1>';
        print '<th> UserID <th> Firstname <th> Lastname
        <th> Username <th> Password <th> Email <th>Usertype';
        while ($row = mysqli_fetch_row($results_id)) {
         print '<tr>';
         foreach ($row as $field){
           print "<td>$field</td> ";
         }
           print '</tr>';
         }
            print '</table>';
      }
       else
        {
            print "<div class=\"orange\">Insert into $database failed!</font></div>";
             echo mysqli_error($connect);
        }

}
   include 'admin_footer.php';

 ?> </body></html>
