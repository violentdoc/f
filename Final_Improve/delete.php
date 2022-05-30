<?php
session_start();
include ("connection.php");
include ("function.php");

$user_data = check_login($con);

$id = $user_data['id'];


$query = "DELETE FROM `users` WHERE `users`.`id` = '$id'";
mysqli_query($con, $query);

header("Location: logout.php");
die;