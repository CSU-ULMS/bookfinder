<?php
print '<html>';
/* This code was originally in SMS for Voyager version 0.9.2 - by Joel Shields of wrlc.org  THANKS JOEL!
Customize here, unless you want to be HSU */
print '<title>HSU Library - Locate and text.</title><body>';

$scrapecall = '';
$location_name ='';
$callno = '';
$title='';
$scrapetitle='';
parse_str($_SERVER['QUERY_STRING']);


$scrapecall = $location_name.' | '.$callno;

$scrapetitle = $title;

$subject = 'HSU';
$message = $scrapecall.' - '.$scrapetitle;
/* The second number here is where you can adjust the length of the total message, if you are getting two messages for one call number. This just cuts off 
the title after 94 characters and shoves an elipse at the end of it. */
$message3 = substr($message,0,94);
$elipse = "...";
$array = array($message3,$elipse);
$message4 = implode("", $array);

print '<center><h1>';
print 'Title: <i>'. $title.'</i><br>Call Number: <b>'.$callno.'</b><br> is located in '.$location_name;
print '</h1></center>';
/* Customize here. Put your own directory here for the send script.  With little code like this, all in one directory seems the easiest approach. */
print '<form action="http://library.humboldt.edu/sms2/locate/send_sms.php" method="post">';
print '<input type="hidden" name="message" value="';
print $message4;
print '">';
/* Form information.  You can add additional mobile carriers here as long as you have their SMS email gateway address. 
there's an OK listing at https://en.wikipedia.org/wiki/SMS_gateway */
print '<center>';
print '<h2>Send the location, call number, and title to your phone.</h2>';
print '<table width="600px"  border="0" >';
print '  <tr>';
print '    <td>Enter 10 digit Phone Number </td>';
print '    <td ><input name="phn" type="text" value="" size="10" maxlength="10">';
print '     &nbsp;</td><td>';
print '     <select name="sms" size="1">';
print '      <option value="" selected>Select a Provider </option>';
print '      <option value="message.alltel.com">Alltel </option>';
print '      <option value="txt.att.net">AT&T </option>';
print '      <option value="myboostmobile.com ">Boost Mobile </option>';
print '      <option value="cingularme.com">Cingular </option>';
print '      <option value="messaging.nextel.com">Nextel </option>';
print '      <option value="messaging.sprintpcs.com">Sprint </option>';
print '      <option value="tmomail.net">T-Mobile </option>';
print '      <option value="email.uscc.net">U.S. Cellular </option>';
print '      <option value="vtext.com">Verizon </option>';
print '      <option value="vmobl.com">Virgin </option>';
print '    </select>';
print '    </td>';
print '  <td>';
print '';
print '<center><input type="submit" value="Send to Mobile Phone"></center></form>';
print '  </table><br>';
print '<div align="center">';
/* This is where you put your image files for your maps.  With so few files in play, I'd just plop them all into one directory. */
print '<img src="http://library.humboldt.edu/sms2/locate/'.$location_code.'.JPG"></img>';
print '</div>';
print '</body> ';

?>

