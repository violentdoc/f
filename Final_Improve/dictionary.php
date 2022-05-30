<?php

session_start();
include("connection.php");
include("function.php");
$_SESSION['route']='dictionary.php';
$user_data = check_login($con);

?>

<html>
<head>
    <title>Dictionary</title>
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
            background: url(image/dictionary.jpg) no-repeat center center fixed;
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
            margin-top: 11%;
        }
        .content h1 {
            font-size: 46px;
            color: white;
        }

        .content .form-control {
            width: 19%;
            height: 40px;
            background: white;
            border-radius: 4px;
            border: 1px solid yellow;
            margin: 10px 0 18px 0;
            padding: 0 10px;
        }

        .words {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 300px;
            background: white;
            border-radius: 6px 6px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            margin: auto;

        }
        .words thead tr {
            background-color: #009879;
            text-align: center;
            font-weight: bold;
        }
        .words th,
        .words td {
            padding: 12px 15px;
        }

        .words tbody tr{
            border-bottom: 1px solid #dddddd;
            color: black;
            text-align: center;
            font-weight: bold;
        }
        .words tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        .words tbody tr:last-of-type {
            border-bottom: 3px solid #dddddd;
        }


    </style>
</head>
<body>
    <div class="header">
        <div class="navbar">

        </div>
        <button class="btn"><a href="index.php">HOME</a> </button>
        <button class="btn"><a href="insert_word.php">INSERT WORD</a> </button>
        <button class="btn"><a href="logout.php">LOGOUT</a></button>
    </div>
    <div class="content">
        <form action="" method="post">
            <h1>Search for a Word</h1>
            <div class="form-group">
                <input type="text" name="word" class="form-control" required>
            </div>
            <button type="submit" class="btn">SEARCH</button>
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $word = $_POST['word'];
            $query = "select * from dictionary where word = '$word'";
            $result = mysqli_query($con, $query);

            if ( $result && mysqli_num_rows($result) > 0 ) {
                $user_data = mysqli_fetch_assoc($result);
                ?>
                <table class="words">
                    <thead>
                        <tr>
                            <th>Word</th>
                            <th>Meaning</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <?php echo $user_data['word'] ?></td>
                            <td> <?php echo $user_data['meaning'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php
            }
            else {
                echo '<script> alert("Invalid Word or it has not been added yet") </script>';
            }
        }
        ?>
    </div>
</body>
</html>