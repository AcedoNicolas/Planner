<?php
!isset($_SESSION["first_name"]) ? session_start() : '';
!isset($_SESSION["first_name"]) ? header("location: ../authentication/index.php") : '';
$user_firstname = ucwords($_SESSION['first_name']);
$user_lastname = ucwords($_SESSION['last_name']);
$user_email = ucwords($_SESSION['email']);
$user_id = ucwords($_SESSION['user_id']);