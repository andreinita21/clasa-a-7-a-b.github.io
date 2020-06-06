<?php

$ip = $_SERVER['REMOTE_ADDR'];

$file = "ips.txt";
$text = file_get_contents ($file);
$text .= $ip . "\n";
file_put_contents($file, $text);

?>
