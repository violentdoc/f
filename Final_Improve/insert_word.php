<?php

session_start();
include("connection.php");
include("function.php");

$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $word = $_POST['word'];
    $meaning = $_POST['meaning'];

    $word = convert($word);


    $query = "insert into dictionary (word, meaning) values ('$word','$meaning')";
    mysqli_query($con, $query);

    //echo '<script> alert("Words inserted successfully!") </script>';

    header("Location: insert_word.php");
    die;
}

?>

<html>
<head>
    <title>Insert Word</title>
    <style>
        body {
            min-height: 100vh;
            color: white;
            font-family: sans-serif;
            font-weight: bold;
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
            /*margin-top: 11%;*/
        }
        .content h1 {
            font-size: 40px;
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
            min-width: 450px;
            background: white;
            border-radius: 6px 6px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            margin: auto;

        }

        .words thead tr {
            background-color: #009879;
            text-align: left;
            font-weight: bold;
        }
        .words th,
        .words td {
            padding: 12px 15px;
        }

        .words tbody tr{
            border-bottom: 1px solid #dddddd;
            color: black;
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
    <button class="btn"><a href="logout.php">LOGOUT</a></button>
</div>
<div class="content">
    <form action="" method="post">
        <!--<h1>Insert A Word</h1>-->
        <div class="form-group">
            <lebel for="">Word</lebel><br>
            <input type="text" name="word" class="form-control" required>
        </div>
        <div class="form-group">
            <lebel for="">Meaning</lebel><br>
            <input type="text" name="meaning" class="form-control" required>
        </div>
        <button type="submit" class="btn">INSERT</button>
    </form>
    <table class="words">
        <thead>
            <tr>
                <th>No</th>
                <th>Word</th>
                <th>Meaning</th>
                <!--<th>Passion</th>-->
            </tr>
        </thead>
        <tbody>

            <?php
            $query = "select * from dictionary";
            $result = mysqli_query($con, $query);
            $count = 1;
            while ($info = mysqli_fetch_array ($result) ) {
                ?>
                <tr>
                    <td> <?php echo $count?></td>
                    <td> <?php echo $info['word'] ?> </td>
                    <td> <?php echo $info['meaning'] ?> </td>
                </tr>
                <?php
                $count++;
            }
            ?>
        </tbody>
    </table>
    <br><br><br>
</div>
</body>
</html>