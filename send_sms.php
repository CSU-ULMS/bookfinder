<html>
<head><title>Locate and SMS call number to your phone.</title></head>
<body>
<?php

/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. 
 Customize the subject variable as you choose.  All the characters count towards how large your message is.  
 Adjust the length of the message in the sms3.php if you start getting a second message with spillover text. 
 This code was originally in SMS for Voyager version 0.9.2 - by Joel Shields of wrlc.org  THANKS JOEL! */ 

$phn = $_POST['phn'];
$sms = $_POST['sms'];
$scrapecall = $_POST['scrapecall'];
$scrapetitle = $_POST['scrapetitle'];
$email = $phn.'@'.$sms;
$subject = 'HSU';


$message = $_POST['message'];
/* PHP form validation: the script checks that the Email field contains a valid email address and the Subject field isn't empty. preg_match performs a regular expression match. It's a very powerful PHP function to validate form fields and other strings - see PHP manual for details. */
if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $email)) {
  echo '<h4>Invalid Phone Number.';
  echo '</h4>';
  echo "<a href='javascript:history.back(1);'>Back</a>";
} elseif ($subject == "") {
  echo "<h4>No subject</h4>";
  echo "<a href='javascript:history.back(1);'>Back</a>";
}

/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
elseif (mail($email,$subject,$message)) {
  echo "<h4>The location, call number, and title of your item have been sent to $phn.</h4>";

} else {
  echo "<h4>Can't send Text Message to $email</h4>";
}
?>
</body>
</html>




