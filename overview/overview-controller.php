<?php

include '../config/session.php';
include '../config/database_connection.php';

$fetch_tasks = $mysqli->query(
            "SELECT t.name taskname, t.id, t.status, t.description, tl.name tasklistname, u.first_name
            FROM tasks t
            JOIN users u ON t.userid = '$user_id'
            JOIN tasklist tl ON t.tasklistid = tl.id");
$tasks = mysqli_fetch_all ($fetch_tasks, MYSQLI_ASSOC);


if ($fetch_tasks->num_rows > 0) {
    echo $fetch_tasks->num_rows;
//    https://stackoverflow.com/questions/11264395/get-all-mysql-selected-rows-into-an-array
}
