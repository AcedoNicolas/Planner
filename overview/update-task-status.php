<?php

include '../config/session.php';
include '../config/database_connection.php';

// https://stackoverflow.com/questions/4064444/returning-json-from-a-php-script
$taskListStatus = $_POST['taskListStatus'];
$taskId = $_POST['taskId'];
echo $taskListStatus;

if ($taskListStatus == "todo") {
    $fetch_tasks = $mysqli->query("UPDATE tasks SET status = 'doing' WHERE id = '$taskId';");
} else {
    $fetch_tasks = $mysqli->query("UPDATE tasks SET status = 'todo' WHERE id = '$taskId';");
}

//$data = mysqli_fetch_all($fetch_tasks, MYSQLI_ASSOC);
//header('Content-Type: application/json'); //JSON object maken om in JS makkelijk te kunnen loopen door data
//echo json_encode($data); //JSON object maken om in JS makkelijk te kunnen loopen door data