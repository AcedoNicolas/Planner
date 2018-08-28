<?php

include '../config/session.php';
include '../config/database_connection.php';

$var = $_GET['taskListId'] ;
$fetch_alltasks = $mysqli->query("SELECT * FROM tasks WHERE userid='$user_id' AND tasklistid='$var'");
$data = mysqli_fetch_all($fetch_alltasks, MYSQLI_ASSOC);
echo json_encode($data);