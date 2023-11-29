<?php 
# Code modified from http://www.codingforums.com/showthread.php?s=&threadid=33413
$ipaddress = $_SERVER['REMOTE_ADDR']; 
$date = date ("M dS H:i:s"); # I think this is in UTF
$page = $_SERVER['PHP_SELF'];

$message = "$page ; $ipaddress ; $date\n"; 


$File = "track_traffic.txt"; 
$Open = fopen($File, "a+"); 
if ($Open){ 
   fwrite($Open, "$message"); 
   fclose ($Open); 
}
?>
