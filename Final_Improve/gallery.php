<html>
<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="lightbox.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 8%;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 25px;
        }

        .gallery img {
            width: 100%;
        }
        h1 {
            text-align: center;
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
            color: black;
            font-size: 14px;
            letter-spacing: 2px;
            padding: 10px 30px;
            border: 2px solid black;
            background: transparent;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
            margin: 40px 8px;
        }

        a {
            color: black;
        }
        .btn:hover {
            color: black;
            background-color: wheat;
        }
        .btn a:visited {
            background-color: #fff;
            color: black;
        }
        .btn a:hover {
            color: black;
        }
        .btn a:link {
            text-decoration: none;
        }

        h1 {
            font-size: 70px;
            font-family: Serif;
            color: black;
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

    <h1>Shine Your Desktop</h1>
    <div class="container">
        <div class="gallery">
            <a href="gallery/1.jpg" data-lightbox="models" data-title="">
                <img src="gallery/1.jpg">
            </a>
            <a href="gallery/2.jpg" data-lightbox="models" data-title="">
                <img src="gallery/2.jpg">
            </a>
            <a href="gallery/3.jpg" data-lightbox="models" data-title="">
                <img src="gallery/3.jpg">
            </a>
            <a href="gallery/4.jpg" data-lightbox="models" data-title="">
                <img src="gallery/4.jpg">
            </a>
            <a href="gallery/5.jpg" data-lightbox="models" data-title="">
                <img src="gallery/5.jpg">
            </a>
            <a href="gallery/6.jpg" data-lightbox="models" data-title="">
                <img src="gallery/6.jpg">
            </a>
            <a href="gallery/7.jpg" data-lightbox="models" data-title="">
                <img src="gallery/7.jpg">
            </a>
            <a href="gallery/8.jpg" data-lightbox="models" data-title="">
                <img src="gallery/8.jpg">
            </a>
        </div>
    </div>

    <script src="lightbox-plus-jquery.min.js"></script>
</body>
</html>
