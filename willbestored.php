<?php

// Validate and sanitize user input
$lat = isset($_GET["lat"]) ? htmlspecialchars($_GET["lat"]) : "";
$long = isset($_GET["long"]) ? htmlspecialchars($_GET["long"]) : "";
$uagent = isset($_GET["uagent"]) ? htmlspecialchars($_GET["uagent"]) : "";
$ip = isset($_SERVER["REMOTE_ADDR"]) ? htmlspecialchars($_SERVER["REMOTE_ADDR"]) : "";

// Open the file with proper error handling
$filename = "location.txt";
$myfile = fopen($filename, "w") or die("Unable to open file!");

// Compose the text
$txt = "lat: " . $lat . "\nlong: " . $long . "\nIP: " . $ip . "\nUser agent: " . $uagent;

// Write to the file
fwrite($myfile, $txt);

// Close the file
fclose($myfile);

?>
