<?php include 'header.php'; ?>
<head><title>Search Results</title></head>
 <?php
 include 'connect.php';

 $database = 'moviegallery';
 $table_name = 'artist';
 $movieCode = $_POST["ArtistID"];
 $query="SELECT * FROM $table_name
 WHERE artistId = '$movieCode'";
 mysqli_select_db($connect, $database);
 $query_result = mysqli_query($connect, $query);
 $artist_detail = "SELECT DISTINCT movie.title
 FROM artist, roll, movie
 WHERE movie.movieCode IN
 (SELECT roll.movieCode
   FROM roll
   WHERE roll.artistId = $movieCode)";

 $detail_result = mysqli_query($connect, $artist_detail);


 ?>

<?php
 while ($row=mysqli_fetch_array($query_result)){?>

   <div class= "row">
   <div class="col-xs-6 col-md-8">

     <img src="../movie/img/Melissa McCarthy.jpg" height="500" width="700">

  </div>
  <div class="col-xs-12 col-md-4">
  <h2>Firstname:      </h2>  <p>  <?php echo $row['firstName'];?></p>
  <h2>Lastname:     </h2>    <p> <?php echo $row['lastName'];?></p>
  <h2>DateOfBirth:      </h2> <p> <?php echo $row['dateOfBirth'];?></p>
  <h2>Nationality:      </h2> <p> <?php echo $row['nationality'];?></p>
  <h2>Other Information:</h2>  <p>  <?php echo $row['otherInfo'];?></p>
  <h2>Cast In Movie:</h2><p>
<?php  while($name=mysqli_fetch_array($detail_result)){

$a=$name['title'];
echo "-\n". $a . "  " ;
} echo " <br>";?></p>
  </div>
  </div>
<?php
}
  mysqli_close($connect);
?>
<?php include 'footer.php'; ?>
