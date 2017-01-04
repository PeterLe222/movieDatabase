<?php

include('connect.php');
session_start();

$database = 'moviegallery';
 mysqli_select_db($connect, $database);

if(isset($_POST['login']))
{
  if(isset($_POST['username']))
  {
  if(isset($_POST['password']))
  {
  $username = mysqli_real_escape_string($connect, $_POST['username']);
  $query = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($connect));
  $user = mysqli_fetch_array($query);

  if(sha1($_POST['password']) == $user['password'])
  {
  echo "Login successful";
  $_SESSION['username'] = $user['username'];
  header("Location: movie.php");
  }
  elseif($_POST['username'] == '' || sha1($_POST['password'])  == '')
  {
    echo "<script>\n";
echo "    alert(\"Please check that you filled out the form\");\n";
echo "</script>\n";
  include('index.html');
  }
  elseif($_POST['username'] == $user['username'] && sha1($_POST['password']) != $user['password'])
  {  echo "<script>\n";
echo "    alert(\"Please check your password\");\n";
echo "</script>\n";
  include('index.html');
  }
  elseif($_POST['username'] != $user['username'])
  {
    echo "<script>\n";
  echo "    alert(\"Please check your name\");\n";
  echo "</script>\n";
  include('index.html');
  }

  else
{
  echo "<script>\n";
echo "    alert(\"Please check your details\");\n";
echo "</script>\n";
include('index.html');
}
}
}
}

?>
