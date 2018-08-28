<?php

include '../config/session.php';
include '../config/database_connection.php';

$taskid = htmlspecialchars($_POST['taskid']);
$comment = htmlspecialchars($_POST['comment']);
$addTaskQuery = "INSERT INTO comments (comment, taskid, userid) VALUES ('$comment', '$taskid', '$user_id')";
$mysqli->query($addTaskQuery);
