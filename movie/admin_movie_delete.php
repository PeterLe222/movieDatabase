<?php  include 'admin_header.php'; ?>
<head><title>Update Movie Results</title></head>
 <?php

 $database = 'moviegallery';
 $table_name = 'movie';
$movieCode = $_POST["ID"];


 $query = "DELETE $table_name, roll FROM  $table_name
 INNER JOIN roll
 ON $table_name.movieCode = roll.movieCode AND $table_name.movieCode = '$movieCode'";
  mysqli_select_db($connect, $database);
if($query){
$query2 = "DELETE $table_name FROM $table_name WHERE movieCode = $movieCode";

  if (mysqli_query($connect, $query2))
  {
    echo "<div class=\"alert alert-danger\">\n";
    echo "  <strong>DONE!!!</strong>\n";
    echo "</div>\n"; }
   else
    {
        print "<div class=\"orange\"> failed!</font></div>";
         echo mysqli_error($connect);
     }
}
 if (mysqli_query($connect, $query))
 {
   echo "<div class=\"alert alert-danger\">\n";
   echo "  <strong>Deleted MovieID $movieCode</strong>\n";
   echo "</div>\n"; }
  else
   {
       print "<div class=\"orange\"> failed!</font></div>";
        echo mysqli_error($connect);
    }


 mysqli_close($connect);





 ?>
<?php include 'admin_footer.php'; ?>
