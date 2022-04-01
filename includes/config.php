<?php
$url = parse_url(getenv("mysql://bde1900971353c:2b4ac360@us-cdbr-east-05.cleardb.net/heroku_d347ebb2241490f?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
?>