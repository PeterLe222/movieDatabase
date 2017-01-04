<html><head><title>Search Results</title></head><body>
  <?php include 'header.php'; ?>
 <?php
 include 'connect.php';

 $database = 'moviegallery';
 $table_name = 'movie';
 $movieCode = $_POST["movID"];
 $movName = $_POST["movName"];
 $image = $_POST["image"];
 $category = $_POST["category"];
 $pubDate = $_POST["pubDate"];


 if($movieCode){
 $query ="SELECT * FROM $table_name WHERE
 (movieCode = '$movieCode')";
 mysqli_select_db($connect, $database);
 $results_id = mysqli_query($connect, $query);
 if ($results_id) {
    if(mysqli_num_rows($results_id) > 0){
      print '<br><table border=1>';
      print ' <th> MovieID <th> MovieName <th> MovieImage <th> MovieCategory
      <th> MovieDescription <th> MoviePublishDate<th> Details';
      while ($row = mysqli_fetch_row($results_id)) {
        print '<tr>';
        $i=0;
        foreach ($row as $field) {
          if($i===0){
            $field1=$field;
            print "<td>$field</td>";
            $i++;
         }
         else {
            print "<td>$field</td> ";
         }}
         print "<td>
         <form action=\"detail.php\" method=\"post\" class=\"input\">
           <input type=\"hidden\" name=\"MovieID\"
           placeholder=\"Input Movie ID\"/ value=\"$field1\">
           <input type=\"submit\" value=\"Read more\"/>
         </form>
         </td>";

       print '</tr>';
    	}
    }
  else{
    echo "<div class=\"alert alert-danger\">\n";
    echo "  <strong>Not Found!!!</strong>\n";
    echo "</div>\n";
    }

  	} else {die ("query=$Query Failed");
    }
  mysqli_close($connect);
}

elseif($movName){
$query = "SELECT * FROM $table_name WHERE
(title LIKE '%$movName%')";
mysqli_select_db($connect, $database);
$results_id = mysqli_query($connect, $query);
if ($results_id) {
    if(mysqli_num_rows($results_id) > 0){
    print '<br><table border=1>';
    print ' <th> MovieID <th> MovieName <th> MovieImage <th> MovieCategory
    <th> MovieDescription <th> MoviePublishDate<th> Details';
    while ($row = mysqli_fetch_row($results_id)) {
      print '<tr>';
      $i=0;
      foreach ($row as $field) {
        if($i===0){
          $field1=$field;
          print "<td>$field</td>";
          $i++;
       }
       else {
          print "<td>$field</td> ";
       }}
       print "<td>
       <form action=\"detail.php\" method=\"post\" class=\"input\">
         <input type=\"hidden\" name=\"MovieID\"
         placeholder=\"Input Movie ID\"/ value=\"$field1\">
         <input type=\"submit\" value=\"Read more\"/>
       </form>
       </td>";

     print '</tr>';
   }}
   else {
     echo "<div class=\"alert alert-danger\">\n";
     echo "  <strong>Not Found!!!</strong>\n";
     echo "</div>\n";
   }
 } else { die ("query=$Query Failed");}
 mysqli_close($connect);
}
elseif($image){
$query = "SELECT * FROM $table_name WHERE
(image = '$image')";

mysqli_select_db($connect, $database);
$results_id = mysqli_query($connect, $query);
if ($results_id) {
    if(mysqli_num_rows($results_id) > 0){
    print '<br><table border=1>';
    print ' <th> MovieID <th> MovieName <th> MovieImage <th> MovieCategory
    <th> MovieDescription <th> MoviePublishDate<th> Details';
    while ($row = mysqli_fetch_row($results_id)) {
      print '<tr>';
      $i=0;
      foreach ($row as $field) {
        if($i===0){
          $field1=$field;
          print "<td>$field</td>";
          $i++;
       }
       else {
          print "<td>$field</td> ";
       }}
       print "<td>
       <form action=\"detail.php\" method=\"post\" class=\"input\">
         <input type=\"hidden\" name=\"MovieID\"
         placeholder=\"Input Movie ID\"/ value=\"$field1\">
         <input type=\"submit\" value=\"Read more\"/>
       </form>
       </td>";

     print '</tr>';
   }}else {
     echo "<div class=\"alert alert-danger\">\n";
     echo "  <strong>Not Found!!!</strong>\n";
     echo "</div>\n";
   }
 } else { die ("query=$Query Failed");}
 mysqli_close($connect);
}


elseif($pubDate){
$query = "SELECT * FROM $table_name WHERE
 (publishDate = '$pubDate')";

 mysqli_select_db($connect, $database);
 $results_id = mysqli_query($connect, $query);
 if ($results_id) {
     if(mysqli_num_rows($results_id) > 0){
      print '<br><table border=1>';
      print ' <th> MovieID <th> MovieName <th> MovieImage <th> MovieCategory
      <th> MovieDescription <th> MoviePublishDate<th> Details';
      while ($row = mysqli_fetch_row($results_id)) {
        print '<tr>';
        $i=0;
        foreach ($row as $field) {
          if($i===0){
            $field1=$field;
            print "<td>$field</td>";
            $i++;
         }
         else {
            print "<td>$field</td> ";
         }}
         print "<td>
         <form action=\"detail.php\" method=\"post\" class=\"input\">
           <input type=\"hidden\" name=\"MovieID\"
           placeholder=\"Input Movie ID\"/ value=\"$field1\">
           <input type=\"submit\" value=\"Read more\"/>
         </form>
         </td>";

       print '</tr>';
   }}else {
     echo "<div class=\"alert alert-danger\">\n";
     echo "  <strong>Not Found!!!</strong>\n";
     echo "</div>\n";
   }
  } else { die ("query=$Query Failed");}
  mysqli_close($connect);
}


elseif($category){
$query = "SELECT * FROM $table_name WHERE
(category = '$category')";
echo "  <div>\n";
mysqli_select_db($connect, $database);
$results_id = mysqli_query($connect, $query);

if ($results_id) {
    if(mysqli_num_rows($results_id) > 0){

    print '<br><table border=3>';
    print ' <th> MovieID <th> MovieName <th> MovieImage <th> MovieCategory
    <th> MovieDescription <th> MoviePublishDate<th> Details';
    while ($row = mysqli_fetch_row($results_id)) {
      print '<tr>';
      $i=0;
      foreach ($row as $field) {
        if($i===0){
          $field1=$field;
          print "<td>$field</td>";
          $i++;
       }
       else {
          print "<td>$field</td> ";
       }}
       print "<td>
       <form action=\"detail.php\" method=\"post\" class=\"input\">
         <input type=\"hidden\" name=\"MovieID\"
         placeholder=\"Input Movie ID\"/ value=\"$field1\">
         <input type=\"submit\" value=\"Read more\"/>
       </form>
       </td>";

     print '</tr>';
   }

 }else {
     echo "<div class=\"alert alert-danger\">\n";
     echo "  <strong>Not Found!!!</strong>\n";
     echo "</div>\n";
   }
 } else { die ("query=$Query Failed");}



 mysqli_close($connect);

 echo "  </div>\n";

}
else{
  echo "<div class=\"alert alert-warning\">\n";
  echo "  <strong>Hey!</strong> You should input movie details!\n";
  echo "</div>\n";
}


  ?> </table></body><?php echo "<br>"; include 'footer.php'; ?></html>
