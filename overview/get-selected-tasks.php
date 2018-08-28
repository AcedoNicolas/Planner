<?php

include '../config/session.php';
include '../config/database_connection.php';

// https://stackoverflow.com/questions/4064444/returning-json-from-a-php-script
$var = htmlspecialchars($_GET['taskListId']);
if ($var === 0) {
    $fetch_tasks = $mysqli->query("SELECT * FROM tasks WHERE userid='$user_id'");
} else {
    $fetch_tasks = $mysqli->query("SELECT * FROM tasks WHERE userid='$user_id' AND tasklistid='$var'");
}

$data = mysqli_fetch_all($fetch_tasks, MYSQLI_ASSOC);
header('Content-Type: application/json'); //JSON object maken om in JS makkelijk te kunnen loopen door data
echo json_encode($data); //JSON object maken om in JS makkelijk te kunnen loopen door data