<?php
date_default_timezone_set('Asia/Calcutta');

$host = 'us-cdbr-iron-east-04.cleardb.net';
$username = 'bb7059bad6cbad';
$password  = 'ff07d883';
$db = 'heroku_820d9f6e7656c08';



// Connect mySql

$mysqli = new mysqli($host, $username, $password, $db);
//Check if Safe connection established

if ($mysqli->connect_error) {
    die("Connect Error:Could not cconnect to database");
}
