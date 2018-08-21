<?php

include '../../config/database_connection.php';

if (isset($_POST)) {
    $tasklistname = $_POST["taskname"];
    $sql = "INSERT INTO tasklist (name) VALUES ('$tasklistname');";
    $mysqli->query($sql);
    header("location: add.php");
} else {
    echo 'Het toevoegen van is niet gelukt';
    header("location: add.php");
}

