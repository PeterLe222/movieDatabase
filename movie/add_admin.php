<?php include 'admin_header.php'; ?>
<head><title>Results</title></head>
<?php



 $firstname = $_POST["firstName"]; $lastname = $_POST["lastName"];
 $username = $_POST["username"]; $password = $_POST["password"];
 $email = $_POST["email"]; $usertype = $_POST["usertype"];
 $database = 'moviegallery';
 $table_name = 'users';

if (!$connect)
{
  die ("Cannot connect to $server using $user");
   }
   else
   {
    	$query = "INSERT INTO $table_name VALUES ('0', '$firstname',
         				'$lastname', '$username', sha1('".$password."'),
                 '$email', '$usertype')";
    	mysqli_select_db($connect , $database);
    	print '<br><font size="10" color="violet">';
    	if (mysqli_query($connect, $query))
   	{
   			print "Successful!</font>";
    	}
      else
      	{
      			print "Failed!</font>";
       	}
      	mysqli_close ($connect);
      }

      ?>
    <?php include 'admin_footer.php'; ?>
