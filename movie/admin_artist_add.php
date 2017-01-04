<html><head><title>Results</title></head><body>
<?php

include 'admin_header.php';

 $firstname = $_POST["fName"]; $lastname = $_POST["lName"];
 $dateOfBirth = $_POST["DOB"]; $nationality = $_POST["nationality"];
 $otherInfo = $_POST["info"];
 $database = 'moviegallery';
 $table_name = 'artist';

if (!$connect)
{
  die ("Cannot connect to $server using $user");
   }
   else
   {
    	$query = "INSERT INTO $table_name VALUES ('0', '$firstname',
         				'$lastname', '$dateOfBirth', '$nationality', '$otherInfo')";
    	mysqli_select_db($connect , $database);
    	print '<br><font size="10" color="violet">';
    	if (mysqli_query($connect, $query))
   	{
   			print "Successful!</font>";
    	}
      else
      	{
      			print "<div class=\"orange\">failed!</font></div>";
       	}
      	mysqli_close ($connect);
      }
      
      include 'admin_footer.php';
      ?>
      </body></html>
