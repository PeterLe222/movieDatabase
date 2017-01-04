
<?php
      $host = 'localhost';  $user = 'root';  $passwd = '';
      $connect = mysqli_connect($host, $user, $passwd);
      session_start();

      if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
      header ("Location: index.html");
      }
 ?>
 <?php
 echo "<!DOCTYPE html>\n";
 echo "\n";
 echo "<html>\n";
 echo "\n";
 echo "  <head>\n";
 echo "    <meta charset=\"utf-8\">\n";
 echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
 echo "    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">\n";
 echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>\n";
 echo "    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>\n";
 echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">\n";
 echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">\n";
 echo "  </head>\n";
 echo "\n";
 echo "  <body class=\"img3\">\n";
 echo "<img class =\"img4\" src=\"/movie/img/img4.jpg\"/>\n";
 echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\">\n";
 echo "    <div class=\"container-fluid\">\n";
 echo "    <ul class=\"nav navbar-nav\">\n";
 echo "      <li><a href=\"index.html\"> <span class=\"glyphicon glyphicon-home\"></span> </a></li>\n";
 echo "      <li><a href=\"http://localhost/movie/movie.php\">Add Movie</a></li>\n";
 echo "      <li><a href=\"http://localhost/movie/add_artist.php\">Add Artist</a></li>\n";
 echo "      <li><a href=\"http://localhost/movie/admin_add_admin.php\">Add User</a></li>\n";
 echo "    </ul>\n";

 echo"<div  class=\"nav navbar-nav navbar-right\"> ";
 echo "    <ul class=\"nav navbar-nav\">\n";
 echo "      <li><a href=\"http://localhost/movie/admin_movie_list.php\">Edit Movie</a></li>\n";

 echo "      <li><a href=\"http://localhost/movie/admin_artist_list.php\">Edit Artist</a></li>\n";

 echo "      <li><a href=\"http://localhost/movie/admin_admin_list.php\">Edit User</a></li>\n";

 echo "      <li><a href=\"http://localhost/movie/logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span></a></li>;\n";
 echo "    </ul>\n";

  echo "  </div>\n";
 echo "  </div>\n";
 echo "</nav>\n";
?>
