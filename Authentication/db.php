<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'planner_db';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
