<?php  include 'admin_header.php'; ?>
<head><title>Delete Artist</title></head>
 <?php
 $artistId = $_POST["ArtistID"];
 $database = 'moviegallery';
 $table_name = 'artist';



 $query = "DELETE  FROM  $table_name
 WHERE artistId = '$artistId'";
  mysqli_select_db($connect, $database);
 if (mysqli_query($connect, $query))
 {
   echo "<div class=\"alert alert-danger\">\n";
   echo "  <strong>Deleted ArtistID $artistId</strong>\n";
   echo "</div>\n"; }
  else
   {
       print "<div class=\"orange\"> failed!</font></div>";
        echo mysqli_error($connect);
    }


 mysqli_close($connect);





 ?>
 <?php include 'admin_footer.php'; ?>
