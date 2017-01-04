<?php  include 'admin_header.php'; ?>
<head><title>Delete User</title></head>
 <?php

 $database = 'moviegallery';
 $table_name = 'users';

 $userId = $_POST["userId"];

 $query = "DELETE  FROM  $table_name
 WHERE userId = '$userId'";
  mysqli_select_db($connect, $database);
 if (mysqli_query($connect, $query))
 {
   echo "<div class=\"alert alert-danger\">\n";
   echo "  <strong>Deleted UserID $userId</strong>\n";
   echo "</div>\n"; }
  else
   {
       print "<div class=\"orange\"> failed!</font></div>";
        echo mysqli_error($connect);
    }


 mysqli_close($connect);





 ?>
 <?php include 'admin_footer.php'; ?>
