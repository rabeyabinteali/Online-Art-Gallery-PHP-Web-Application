<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="admin_request.css">
    <link rel="icon" href="img/logo.png">
    <title> Online Art Gallery</title>
    <script src="https://kit.fontawesome.com/d989eee63d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header">
        <img src="img/logo.png" onclick="location.href='index.php'">
        <!-- <input type="text" id="searchTopic" placeholder="Search For Anything"> -->
        <!-- <a href="login.php" style="font-size: 25px;"><i class="fas fa-cart-plus"></i></a> -->
        <a href="login.php">Log In</a>
        <a href="aboutus.php"> About Us</a>
        <a href="gallery.php"> See Gallery</a>
    </div>
    <main>
        <aside>
            <div class="panel">
                <h2>Admin Panel</h2>
            </div>
            <a href="admin_info.php">
                <div class="info">
                    <p><i class="fa fa-user-circle" aria-hidden="true"></i> Edit Info</p>
                </div>
            </a>
            <a href="admin_request.php">
                <div class="request">
                    <p><i class="fa fa-question-circle" aria-hidden="true"></i> Pending Requests</p>
                </div>
            </a>
            <a href="admin_statistics.php">
                <div class="statistics">
                    <p><i class="fa fa-bar-chart" aria-hidden="true"></i> Statistics</p>
                </div>
            </a>
        </aside>
        <div class="result"></div>
    </main>
</body>

</html>