<?php

include '../config/session.php';
include '../config/database_connection.php';

$fetch_tasks = $mysqli->query("SELECT * FROM tasks WHERE userid='$user_id'");
if ($fetch_tasks->num_rows > 0) {
//    https://stackoverflow.com/questions/11264395/get-all-mysql-selected-rows-into-an-array
    $tasks = mysqli_fetch_all($fetch_tasks, MYSQLI_ASSOC);
}