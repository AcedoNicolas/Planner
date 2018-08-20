<?php

include '../../config/database_connection.php';

if (isset($_POST)) {
    $taskname = $_POST["taskname"];
    $taskdescription = $_POST["taskdescription"];
    $taskuserid = $_POST["taskuserid"];
    $status = $_POST["taskstatus"];
    $sql = "INSERT INTO tasks (name, description, userid, status) VALUES ('$taskname','$taskdescription','$taskuserid', '$status');";
    $mysqli->query($sql);
    header("location: add.php");
} else {
    echo 'Het toevoegen van is niet gelukt';
    header("location: add.php");
}

