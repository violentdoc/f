<?php
session_start();
include ("connection.php");
include ("function.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $id = $user_data['id'];

    if( !empty($name) ) {
        $query = "UPDATE `users` SET `name` = '$name' WHERE `users`.`id` = '$id'";
        mysqli_query($con, $query);
    }
    if( !empty($username) && !is_numeric($username) ) {
        $query = "UPDATE `users` SET `username` = '$username' WHERE `users`.`id` = '$id'";
        mysqli_query($con, $query);
    }
    if( !empty($password) ) {
        $query = "UPDATE `users` SET `password` = '$password' WHERE `users`.`id` = '$id'";
        mysqli_query($con, $query);
    }
    header("Location: aboutme.php");
    die;

}
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
        /*.two {
            font-weight: bold;
            color: white;
            font-size: 50px;
        }*/
        .content {
            margin-left: 50px;
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
        <button class="btn"><a href="logout.php">LOGOUT</a> </button>
    </div>
    <div class="content">
        <form action="" method="post">
            <br>
            <br>

            <p class="one">Name</p>
            <div class="form-group">
                <input type="text" name="name" placeholder="<?php echo $user_data['name']?>" class="form-control">
            </div>

            <br>
            <br>

            <p class="one">Username</p>
            <div class="form-group">
                <input type="text" name="username" placeholder="<?php echo $user_data['username']?>" class="form-control">
            </div>

            <br>
            <br>

            <p class="one">Password</p>
            <div class="form-group">
                <input type="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn">SAVE</button>
        </form>
    </div>
</div>
</body>
</html>
