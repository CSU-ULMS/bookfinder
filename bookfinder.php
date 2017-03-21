<style type="text/css">

header {
  width:100%;
  height:20%; 
  top:0;
  left:0;
  background-color:white;
  display:block;
  text-align:center;
}



</style>

<?php


echo '<header>';
parse_str($_SERVER['QUERY_STRING']);
echo '<h1>';
echo 'Title: <i>'. $title.'</i><br>Call Number: <b>'.$callno.'</b><br> is located in '.$location_name;
echo '</h1>';
echo '</header>';
echo '<div align="center">';
echo '<img src="http://tylerrogers.sdsu.edu/maps/'.$location_code.'.JPG"></img>';
echo '</div>';
?>
