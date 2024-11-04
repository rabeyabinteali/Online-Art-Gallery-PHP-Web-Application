<html>
    <?php 
        session_start();
        include("connection.php");
    ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="icon" href="img/logo.png">
    <title> Online Art Gallery</title>
    <script src="https://kit.fontawesome.com/d989eee63d.js" crossorigin="anonymous"></script>
</head>
<body >
    <div class="header">
        <img src="img/logo.png" onclick="location.href='index.php'">
        <form method="post" action="arts.php">
        <input type="text" name="searchTopic" placeholder="Search For Anything">
        <input type="submit" value="Search">
        </form>
        <?php if(!isset($_SESSION['id'])){ ?>
        <a href="login.php" >Log In</a>
        <?php }else{ ?>
        <a href="Logout.php" style="font-size: 15px;"><i class="fas fa-user"><text style="font-size:10px"><br>Log<br>Out</i></a></text>
        <?php } ?>
        <a href="aboutus.php">About</a>
        <a href="gallery.php">Gallery</a>
        <?php if(isset($_SESSION['id'])){ ?>
        <a href="home.php" >Profile</a>
        <?php } ?>
        <a href="index.php">Home</a>
    </div>
</body>
</html>