<?php
session_start();
include ("connection.php");
include ("function.php");

$user_data = check_login($con);
?>

<html>
<head>
    <title>Quiz Result</title>
    <style>
        p {
            font-weight: bold;
            font-size: 30px;
            margin-left: 500px;
        }
    </style>
</head>
<body>
    <?php
    echo "<p>";


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

    echo "<p>";
    if( $user_data['score'] < $score ) {
        $query = "UPDATE users SET score = $score WHERE username = '$username'";
        mysqli_query($con, $query);
        echo "Your score has been improved!"."<br>";
    }


    echo "You got " .$score. " out of 3 " .$user_data['username']. "<br>";

    echo "</p>";
    ?>

    <p>
        <a href="quiz.php"> <input type="button" value="Resubmit"></a>
        <a href="index.php"> <input type="button" value="Go Home"></a>
    </p>

</body>
</html>

