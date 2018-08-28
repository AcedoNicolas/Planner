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

    if (isset($_POST['deleteTaskBtn'])) {
        $taskId = htmlspecialchars($_POST['taskid']);
        $sql = "DELETE FROM tasks WHERE id='$taskId'";

        if ($mysqli->query($sql) === TRUE) {
            echo "task deleted successfully";
        } else {
            echo "Error deleting record: " . $mysqli->error;
        }
    }

//    if (isset($_POST['addCommentBtn'])) {
//        echo 'comment button clicked';
//        $comment = $_POST['comment'];
//        $taskid = $_POST['taskid'];
//        $addTaskQuery = "INSERT INTO comments (comment, taskid, userid) VALUES ('$comment', '$taskid', '$user_id')";
//        $mysqli->query($addTaskQuery);
//    }



