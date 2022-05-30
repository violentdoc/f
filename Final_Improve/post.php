<html>
<head>
    <title>Feed</title>
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
    </style>
</head>
<body>
    <div class="header">
        <div class="navbar">

        </div>
        <button class="btn"><a href="index.php">HOME</a> </button>
        <button class="btn"><a href="feed.php">FEED</a> </button>
        <button class="btn"><a href="logout.php">LOGOUT</a></button>
    </div>
    <div class="content">

    </div>
</body>
</html>
