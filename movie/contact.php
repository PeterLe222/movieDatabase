<title>Contact</title>
<?php
 include 'header.php';
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];

  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);

  //Email response
  echo "<div class=\"white\">Thank you for contacting us!</div>";
  include 'footer.php';
  }
  //if "email" variable is not filled out, display the form
  else  {
?>
 <form method="post">
  <div class="white">Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br /></div>
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Send" class="btn btn-primary"/>
  <input type="reset" value="Clear" class="btn btn-primary"/>
  </form>
<?php   include 'footer.php'; ?>
<?php
  }
?>
