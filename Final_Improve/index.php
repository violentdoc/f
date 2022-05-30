<html>
<head>
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;

        }
        .container {
            width: 100%;
            height: 100vh;
            background-image: url("image/index.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding-left: 8%;
            padding-right: 8%;
            box-sizing: border-box;
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
            /*color: #cc0052;*/
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
            color: #000;
            background-color: #fff;
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
            margin-top: 12%;
        }
        .content h1 {
            font-size: 80px;
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="navbar">

            </div>
            <button class="btn"><a href="login.php">LOGIN</a></button>

        </div>
        <div class="content">
            <h1>Test Your Limit</h1>
            <button class="btn"><a href="quiz.php">Quiz</a></button>
            <button class="btn"><a href="dictionary.php">Dictionary</a></button>
            <button class="btn"><a href="gallery.php">Gallery</a></button>
            <button class="btn"><a href="aboutme.php">About Me</a></button>
        </div>
    </div>
</body>
</html>