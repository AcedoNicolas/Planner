<?php

include '../config/session.php';
include '../config/database_connection.php';

$taskListStatus = htmlspecialchars($_POST['taskListStatus']);
$taskId = htmlspecialchars($_POST['taskId']);

if ($taskListStatus == "todo") {
    $fetch_tasks = $mysqli->query("UPDATE tasks SET status = 'doing' WHERE id = '$taskId';");
} else {
    $fetch_tasks = $mysqli->query("UPDATE tasks SET status = 'todo' WHERE id = '$taskId';");
}
