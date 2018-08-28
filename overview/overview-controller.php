<?php

include '../config/session.php';
include '../config/database_connection.php';

$tasklistIsEmpty = true;
$tasksIsEmpty = true;

$fetch_tasksList = $mysqli->query("SELECT * FROM tasklist");
$tasksList = mysqli_fetch_all($fetch_tasksList, MYSQLI_ASSOC);

$fetch_alltasks = $mysqli->query("SELECT * FROM tasks WHERE userid='$user_id'");
$tasks = mysqli_fetch_all($fetch_alltasks, MYSQLI_ASSOC);


if (!empty($tasksList)) {
    $tasklistIsEmpty = false;
}
if (!empty($taskcs)) {
    $tasksIsEmpty = false;
}

if (isset($_POST['deleteTask'])) {
    echo 'post done';
    $taskId = $_POST['deleteTask'];
    $sql = "DELETE FROM tasks WHERE id='$taskId'";

    if ($mysqli->query($sql) === TRUE) {
        echo "task deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
