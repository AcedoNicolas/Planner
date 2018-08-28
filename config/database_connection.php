<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'planner_db';
$mysqli = mysqli_connect($host,$user,$pass,$db);

//if (!$mysqli) {
//    echo "Error: Unable to connect to MySQL." . PHP_EOL;
//    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//    exit;
//} else {
//    echo "connection oke";
//}
//
