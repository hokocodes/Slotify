<?php
$url = parse_url(getenv("mysql://bde1900971353c:2b4ac360@us-cdbr-east-05.cleardb.net/heroku_d347ebb2241490f?reconnect=true"));

$server = $url["us-cdbr-east-05.cleardb.net"];
$username = $url["bde1900971353c"];
$password = $url["2b4ac360"];
$db = substr($url["heroku_d347ebb2241490f"], 1);

$conn = new mysqli($server, $username, $password, $db);
?>