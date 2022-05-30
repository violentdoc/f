<?php

session_start();
include("connection.php");
include("function.php");

$user_data = check_login($con);

?>

<html>
<head>
    <title>Quiz Result</title>
    <style>
        * {
            margin: 0;
            padding: 0;

        }
        body {
            background: url(image/result.jpg) no-repeat center center fixed;
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
        .content {
            text-align: center;
            margin-top: 11%;
        }
        .content h1 {
            font-size: 46px;
            color: white;
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
        <?php
            $q1='';
            $q2='';
            $q3='';
            $q4='';
            $q5='';
            $q6='';
            $q7='';
            $q8='';
            $q9='';
            $q10='';
            /* echo '<pre>';
            print_r($_POST); */

            if(isset($_POST['q1']))
            {
                $q1 = $_POST['q1'];
            }
            if(isset($_POST['q2']))
            {
                  $q2 = $_POST['q2'];
            }
            if(isset($_POST['q3']))
            {

                $q3 = $_POST['q3'];
            }
            if(isset($_POST['q4']))
            {

                $q4 = $_POST['q4'];
            }
            if(isset($_POST['q5']))
            {

                $q5 = $_POST['q5'];
            }
            if(isset($_POST['q6']))
            {

                $q6 = $_POST['q6'];
            }
            if(isset($_POST['q7']))
            {

                $q7 = $_POST['q7'];
            }
            if(isset($_POST['q8']))
            {

                $q8 = $_POST['q8'];
            }
            if(isset($_POST['q9']))
            {

                $q9 = $_POST['q9'];
            }
            if(isset($_POST['q10']))
            {

                $q10 = $_POST['q10'];
            }

            $score = 0;

            if ( $q1 == '3' ) $score++;
            if ( $q2 == '3' ) $score++;
            if ( $q3 == '2' ) $score++;
            if ( $q4 == '1' ) $score++;
            if ( $q5 == '1' ) $score++;
            if ( $q6 == '4' ) $score++;
            if ( $q7 == '4' ) $score++;
            if ( $q8 == '3' ) $score++;
            if ( $q9 == '2' ) $score++;
            if ( $q10 == '3' ) $score++;

            $username = $user_data['username'];

            if( $user_data['score'] < $score ) {
                $query = "UPDATE users SET score = $score WHERE username = '$username'";
                mysqli_query($con, $query);
                ?>
                    <h1> <?php echo "Your score has been improved!" ?></h1>
                <?php
                //echo "Your score has been improved!"."<br>";
            }

            ?>
                <h1> <?php echo "You got " .$score. " out of 10, " .$user_data['username'] ?> </h1>
            <?php
        ?>
        <button class="btn"><a href="quiz.php">RESUBMIT</a> </button>
    </div>

</body>
</html>