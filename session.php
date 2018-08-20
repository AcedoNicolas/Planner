<?php
session_start();
$user_firstname = ucwords($_SESSION['first_name']);
$user_lastname = ucwords($_SESSION['last_name']);
$user_email = ucwords($_SESSION['email']);
?>