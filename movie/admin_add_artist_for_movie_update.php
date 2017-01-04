<?php include 'admin_header.php'; ?>
<head><title>Add artist to movie</title></head>

<?php
echo '<div>';
$lName1 = $_POST["lName1"];  $fName1 = $_POST["fName1"];
$lName2 = $_POST["lName2"];  $fName2 = $_POST["fName2"];
$lName3 = $_POST["lName3"];  $fName3 = $_POST["fName3"];
$title = $_POST["title"];
$category = $_POST["category"]; $movDesc = $_POST["movDesc"];
$pubDate = $_POST["pubDate"];
$database = 'moviegallery';
if (!$connect)
{
  die ("Cannot connect to $server using $user");
   }
   else
   {
     if($fName1 !== ''){
     $query3 = "SELECT movieCode FROM movie
             WHERE title = '$title'
              && category = '$category'
             && movieDesc = '$movDesc'  && publishDate = '$pubDate'";
     mysqli_select_db($connect, $database);
     $results_id2 = mysqli_query($connect, $query3);
     $mo_id = mysqli_fetch_row($results_id2);
     $i=0;
     foreach ($mo_id as $field) {
       if($i===0){
         $mo = $field;
       }
     }
     $query2 = "SELECT artistId FROM artist
      WHERE firstName = '$fName1'
     && lastName = '$lName1'";
    mysqli_select_db($connect, $database);
     $results_id = mysqli_query($connect, $query2);
     $ar_id = mysqli_fetch_row($results_id);
     foreach ($ar_id as $field) {
       if($i===0){
         $ar = $field;
       }
     }
     $add = "INSERT INTO roll (movieCode,artistId) VALUES ($mo,$ar)";
     if (mysqli_query($connect, $add))
     {
         print "<div class=\"green\">Insert Artist 1 into $database was successful!</font></div>";
     }
      else
       {

           print "<div class=\"orange\">Insert into $database failed!</font></div>";
            echo mysqli_error($connect);
        }
   }
   else {
     echo "<div class=\"alert alert-danger\">\n";
     echo "  <strong>Please Input Artist!!!</strong>\n";
     echo "</div>\n";
   }
   if($fName2 != ''){
       $query4 = "SELECT artistId FROM artist
        WHERE firstName = '$fName2'
       && lastName = '$lName2'";
         $results_id3 = mysqli_query($connect, $query4);
         $ar_id2 = mysqli_fetch_row($results_id3);
         foreach ($ar_id2 as $field) {
           if($i===0){
             $ar2 = $field;
           }
         }
         $add2 = "INSERT INTO roll (movieCode,artistId) VALUES ($mo,$ar2)";
         if (mysqli_query($connect, $add2))
         {
             print "<div class=\"green\">Insert Artist 2 into $database was successful!</font></div>";
         }
          else
           {

               print "<div class=\"orange\">Insert into $database failed!</font></div>";
                echo mysqli_error($connect);
            }
     }
       if($fName3 != ''){
           $query5 = "SELECT artistId FROM artist
            WHERE firstName = '$fName3'
           && lastName = '$lName3'";
             $results_id4 = mysqli_query($connect, $query5);
             $ar_id3 = mysqli_fetch_row($results_id4);
             foreach ($ar_id3 as $field) {
               if($i===0){
                 $ar3 = $field;
               }
             }
             $add3 = "INSERT INTO roll (movieCode,artistId) VALUES ($mo,$ar3)";
             if (mysqli_query($connect, $add3))
             {
                 print "<div class=\"green\">Insert Artist 3 into $database was successful!</font></div>";
             }
              else
               {

                   print "<div class=\"orange\">Insert into $database failed!</font></div>";
                    echo mysqli_error($connect);
                }
           }
/*       $query3 = "SELECT movieCode FROM movie
        WHERE title = '$title'
        && image = '$image' && category = '$category'
        && movieDesc = '$movDesc'  && publishDate = '$pubDate'";
mysqli_select_db($connect, $database);
$results_id2 = mysqli_query($connect, $query3);
$mo_id = mysqli_fetch_array($results_id2);
 $re_mo_id = $mo_id['movieCode'];
 print $re_mo_id;
 $query2 = "SELECT artistId FROM artist
  WHERE firstName = '$fName1'
 && lastName = '$lName1'";
mysqli_select_db($connect, $database);
 $results_id = mysqli_query($connect, $query2);
 $ar_id = mysqli_fetch_array($results_id);
 $re_ar_id = $ar_id['artistId'];
 print $re_ar_id ;
 $add = "INSERT INTO `roll` VALUES('$re_mo_id','$re_ar_id')";
 print $add;
/*  if($fName1 !== ''){

      $query4 = "INSERT INTO `roll`(`movieCode`, `artistId`)
      VALUES ($re_mo_id, $re_ar_id)";
      print $query4;

  if($fName2 !== ''){
      $query4 = "SELECT artistId FROM artist
       WHERE firstName = '$fName2'
      && lastName = '$lName2'";
        $results_id3 = mysqli_query($connect, $query4);
        $ar_id2 = mysqli_fetch_array($results_id3);
        $re_ar_id2 = $ar_id2['artistId'];
        $query5 = "INSERT INTO roll VALUES ('$re_mo_id', '$re_ar_id2')";
        print $query5;


        $query5 = "SELECT artistId FROM artist
         WHERE firstName = '$fName3'
        && lastName = '$lName3'";
        $ar_id3 = mysqli_fetch_array($results_id4);
        $results_id4 = mysqli_query($connect, $query5);
        $re_ar_id3 = $ar_id3['artistId'];
        $query6 = "INSERT INTO roll VALUES ('$re_mo_id', '$re_ar_id3')";
        print $query6;
      }
      */

  /*  	if (mysqli_query($connect, $add))
   	{
   			print "<div class=\"green\">Insert into $database was successful!</font></div>";
    	}
      else
      	{

      			print "<div class=\"orange\">Insert into $database failed!</font></div>";
            echo mysqli_error($connect);
        } */
  mysqli_close ($connect);
}
echo '</div>';
      ?>
<?php include 'admin_footer.php'; ?>
