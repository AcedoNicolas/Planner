<?php

include '../../config/database_connection.php';
include '../../config/session.php';

if (isset($_POST)) {
    $tasklistname = $_POST["taskname"];
    $sql = "INSERT INTO tasklist (name, userid) VALUES ('$tasklistname', $user_id);";
    $mysqli->query($sql);
    header("location: add.php");
} else {
    echo 'Het toevoegen van is niet gelukt';
    header("location: add.php");
}

