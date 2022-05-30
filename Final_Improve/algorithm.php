<?php
session_start();
include ("connection.php");
include ("function.php");
$_SESSION['route']='algorithm.php';

$user_data = check_login($con);
?>

<html>
<head>
    <title>Algorithm</title>
    <style>
        * {
            margin: 0;
            padding: 0;

        }
        body {
            background: url(image/algorithm.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .header {
            height: 15%;
            display: flex;
            align-items: center;
            overflow: hidden;
            position: relative;
        }
        .navbar {
            text-align: center;
            flex: 1;
        }
        .btn {
            cursor: pointer;
            color: white;
            font-size: 14px;
            letter-spacing: 2px;
            padding: 10px 30px;
            border: 2px solid white;
            background: transparent;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
            margin: 40px 8px;
        }

        a {
            color: white;
        }
        .btn:hover {
            color: black;
            background-color: white;
        }
        .btn a:visited {
            background-color: #fff;
            color: white;
        }
        .btn a:hover {
            color: black;
        }
        .btn a:link {
            text-decoration: none;
        }

        .content h1 {
            font-size: 50px;
            color: white;
            text-align: center;
            background-color: #009879;
            padding: 7px;
        }
/*        .rainbow-text {
            background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);
        }*/
        .content {
            size: 200px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="navbar">

        </div>
        <button class="btn"><a href="index.php">HOME</a> </button>
        <button class="btn"><a href="logout.php">LOGOUT</a> </button>
    </div>
    <div class="content">
        <h1>1. Binary Search</h1>

    </div>
</div>
</body>
</html>
