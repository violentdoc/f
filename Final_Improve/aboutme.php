<?php
session_start();
include ("connection.php");
include ("function.php");
$_SESSION['route']='aboutme.php';

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
            background: url(image/aboutme.jpg) no-repeat center center fixed;
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
            text-align: left;
            /*background-color: #009879;*/
            padding: 7px;
            /*margin-left: 20px;*/
        }

        .one {
            font-weight: bold;
            color: white;
            font-size: 20px;
            padding: 2px;
        }
        .two {
            font-weight: bold;
            color: white;
            font-size: 50px;
        }
        .content {
            margin-left: 50px;
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

        <br>
        <br>

        <p class="one">Name</p>
        <p class="two"><?php echo $user_data['name'] ?></p>

        <br>
        <br>

        <p class="one">Username</p>
        <p class="two"><?php echo $user_data['username'] ?></p>

        <br>
        <br>

        <p class="one">Password</p>
        <p class="two"><?php echo $user_data['password'] ?></p>

        <br>
        <br>

        <p class="one">Quiz score</p>
        <p class="two"><?php echo $user_data['score']?></p>

        <button class="btn"><a href="edit_info.php">EDIT</a> </button>
        <button class="btn"><a href="delete.php" onclick="return confirm('Are you sure you want to delete the account?')"
            >DELETE ACCOUNT</a> </button>
    </div>
</div>
</body>
</html>
