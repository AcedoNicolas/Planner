<?php
include '../../config/database_connection.php';

$fetch_tasksList = $mysqli->query("SELECT * FROM tasklist");
$tasksList = mysqli_fetch_all ($fetch_tasksList, MYSQLI_ASSOC);
$tasklistIsEmpty = true;

if (!empty($tasksList)){
    $tasklistIsEmpty = false;
}

if (isset($_POST['submit'])) {
    $taskname = htmlspecialchars($_POST["taskname"]);
    $taskdescription = htmlspecialchars($_POST["taskdescription"]);
    $taskuserid = htmlspecialchars($_POST["taskuserid"]);
    $tasklist = htmlspecialchars($_POST["tasklist"]);
    $addTaskQuery = "INSERT INTO tasks (name, description, userid, tasklistid) VALUES ('$taskname','$taskdescription','$taskuserid', '$tasklist');";
    $mysqli->query($addTaskQuery);
    header("location: add.php");
}
