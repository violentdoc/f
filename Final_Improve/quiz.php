<?php
session_start();
include ("connection.php");
include ("function.php");
$_SESSION['route']='quiz.php';

$user_data = check_login($con);

?>

<html>
<head>
    <title>Quiz</title>
    <style>
        h1 {
            background-color: teal;
            text-align: center;
            color: white;
            padding: 15px;
            font-size: 50px;
        }
        div {
            margin-left: 500px;
        }
        p {
            font-weight: bold;
            font-size: 21px;
        }
        body {
            background: url(image/quiz.jpg) no-repeat center center fixed;
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
<h1> Ready for a quiz session, <?php echo $user_data['username'] ?> ? </h1>

    <div>
        <form action="result.php" method="post">
            <p>1. When did Bangladesh Liberation War took place?</p>
            <input type="radio" name="q1" id="q1" value="1"> 1952 <br>
            <input type="radio" name="q1" id="q1" value="2"> 1665 <br>
            <input type="radio" name="q1" id="q1" value="3"> 1971 <br>
            <input type="radio" name="q1" id="q1" value="4"> 1995 <br> <br>

            <p>2. What is the capital of Bangladesh?</p>
            <input type="radio" name="q2" id="q2" value="1"> Chittagong <br>
            <input type="radio" name="q2" id="q2" value="2"> Comilla <br>
            <input type="radio" name="q2" id="q2" value="3"> Dhaka <br>
            <input type="radio" name="q2" id="q2" value="4"> Noakhali <br> <br>

            <p>3. Is Noakhali a district?</p>
            <input type="radio" name="q3" id="q3" value="1"> Yes <br>
            <input type="radio" name="q3" id="q3" value="2"> No <br> <br>

            <p>4. What does Bangladesh's flag look like?</p>
            <input type="radio" name="q4" id="q4" value="1"> Green background with red circle in centre <br>
            <input type="radio" name="q4" id="q4" value="2"> White background with black circle in centre <br>
            <input type="radio" name="q4" id="q4" value="3"> Red background with white circle in centre <br>
            <input type="radio" name="q4" id="q4" value="4"> Blue background with yellow star in centre <br> <br>

            <p>5. On which continent is Bangladesh located?</p>
            <input type="radio" name="q5" id="q5" value="1"> Asia <br>
            <input type="radio" name="q5" id="q5" value="2"> Europe <br>
            <input type="radio" name="q5" id="q5" value="3"> Africa <br>
            <input type="radio" name="q5" id="q5" value="4"> South America <br> <br>

            <p>6. What is the main religion practiced in Bangladesh?</p>
            <input type="radio" name="q6" id="q6" value="1"> Buddhism <br>
            <input type="radio" name="q6" id="q6" value="2"> Hinduism <br>
            <input type="radio" name="q6" id="q6" value="3"> Christianity <br>
            <input type="radio" name="q6" id="q6" value="4"> Islam <br> <br>

            <p>7. Who became Prime Minister of Bangladesh in 2001?</p>
            <input type="radio" name="q7" id="q7" value="1"> Begum Faria Haque <br>
            <input type="radio" name="q7" id="q7" value="2"> Sohel Rhaman <br>
            <input type="radio" name="q7" id="q7" value="3"> Mohammad Dim Emi <br>
            <input type="radio" name="q7" id="q7" value="4"> Begum Zia <br> <br>

            <p>8. What is the national flower of Bangladesh?</p>
            <input type="radio" name="q8" id="q8" value="1"> Tulip <br>
            <input type="radio" name="q8" id="q8" value="2"> Rose <br>
            <input type="radio" name="q8" id="q8" value="3"> Water Lily <br>
            <input type="radio" name="q8" id="q8" value="4"> Orchid <br> <br>

            <p>9. Bangladesh has a ruling royal family.</p>
            <input type="radio" name="q9" id="q9" value="1"> True <br>
            <input type="radio" name="q9" id="q9" value="2"> False <br> <br>

            <p>10. What did Bangladesh become known as after its first session of Independence in 1947?</p>
            <input type="radio" name="q10" id="q10" value="1"> East Burma <br>
            <input type="radio" name="q10" id="q10" value="2"> East India <br>
            <input type="radio" name="q10" id="q10" value="3"> East Pakistan <br>
            <input type="radio" name="q10" id="q10" value="4"> West Pakistan <br> <br>


            <input type="submit" name="submit" value="Submit">
        </form>

    </div>
</body>
</html>
