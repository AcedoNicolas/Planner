<?php
include '../../config/database_connection.php';

$fetch_tasksList = $mysqli->query("SELECT * FROM tasklist");
$tasksList = mysqli_fetch_all ($fetch_tasksList, MYSQLI_ASSOC);
$tasklistIsEmpty = true;

if (!empty($tasksList)){
    $tasklistIsEmpty = false;
}

if (isset($_POST['submit'])) {
    $taskname = $_POST["taskname"];
    $taskdescription = $_POST["taskdescription"];
    $taskuserid = $_POST["taskuserid"];
    $tasklist = $_POST["tasklist"];
    $addTaskQuery = "INSERT INTO tasks (name, description, userid, tasklistid) VALUES ('$taskname','$taskdescription','$taskuserid', '$tasklist');";
    $mysqli->query($addTaskQuery);
    header("location: add.php");
}
