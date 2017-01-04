<?php include 'admin_header.php'; ?>
<head><title>Search Results</title></head>
 <?php

 $database = 'moviegallery';
 $table_name = 'movie';
 $movieCode = $_POST["MovieID"];
 $query="SELECT * FROM movie
 WHERE movieCode = '$movieCode'";
 mysqli_select_db($connect, $database);
 $query_result = mysqli_query($connect, $query);
//
$artist_detail = "SELECT DISTINCT artist.firstName, artist.lastName
FROM artist, roll, movie
WHERE artist.artistId IN
(SELECT roll.artistId
  FROM roll
  WHERE roll.movieCode = $movieCode)";

$detail_result = mysqli_query($connect, $artist_detail);

?>



<?php


//
 while ($row=mysqli_fetch_array($query_result)){?>

   <div class= "row">
   <div class="col-xs-6 col-md-8">

     <img src="../movie/img/<?php echo $row['image']; ?>" height="500" width="700">

  </div>
  <div class="col-xs-12 col-md-4">
  <h2>Title: </h2><p> <?php echo $row['title'];?> </p>
  <h2>Publish Date:</h2><p>  <?php echo $row['publishDate'];?> </p>
  <h2>Category: </h2><p> <?php echo $row['category'];?> </p>
  <h2>Description:</h2><p> <?php echo $row['movieDesc'];?> </p>
  <h2>Artist: </h2><p> <?php while ($name=mysqli_fetch_array($detail_result)) {
     echo "-\n" ;echo $name['firstName']." ". $name['lastName'];echo "<br>";}?> </p>
  <h2>Movie ID: </h2><p> <?php echo $row['movieCode'];?> </p>
  </div>
</div>
<?php

  mysqli_close($connect);}
?>
<?php include 'admin_footer.php'; ?>
