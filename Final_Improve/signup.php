<?php
session_start();
include ("connection.php");
include ("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $score = 0;

    if(!empty($username) && !empty($password) && !is_numeric($username)) {

        $user_id = random_num(20);
        $query = "insert into users (name, user_id, username, password, score) values ('$name', '$user_id', '$username', '$password', '$score')";

        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    }
    else{
        echo "please enter valid information";
    }
}
?>

<html>
<head>
    <title>Sign Up</title>
    <style>

        body {
            min-height: 100vh;
            color: white;
            font-family: sans-serif;
        }

        * {
            margin: 0;
            padding: 0;

        }
        body {
            background: url(image/login.jpg) no-repeat center center fixed;
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

        .content {
            text-align: center;
            /*margin-top: 11%;*/
        }
        .content h1 {
            font-size: 55px;
            color: white;
        }

        .container .form-control {
            width: 20%;
            height: 40px;
            background: white;
            border-radius: 4px;
            border: 1px solid yellow;
            margin: 10px 0 18px 0;
            padding: 0 10px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="navbar">

        </div>
        <button class="btn"><a href="index.php">HOME</a> </button>
    </div>

    <div class="content">
        <form action="" method="post">
            <h1>Sign Up</h1>
            <div class="form-group">
                <lebel for="">Name</lebel><br>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <lebel for="">Username</lebel><br>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <lebel for="">Set Password</lebel><br>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn">SIGN UP</button>
            <br> Already have an account? <a href="login.php">Login Here</a>
        </form>
    </div>

</div>
</body>
</html>