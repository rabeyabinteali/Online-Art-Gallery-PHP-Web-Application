<html>
    <?php 
        session_start();
        include("connection.php");
    ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="aboutus.css">
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
        <a href="index.php">Home</a>
        <a href="gallery.php">Gallery</a>
        <?php if(isset($_SESSION['id'])){ ?>
        <a href="home.php" >Profile</a>
        <?php } ?>
        <a href="arts.php"> Arts</a>
    </div>
    <div>
        <section class="about_section" id="About">
            <!-- <div class="about_img">
                -<img src="one.png" alt="About Us Image">-
            </div> -->
            <div class="img">
                <div class="img_block">
                    <img src="img/logo.png" alt="our logo">
                </div>
            </div>
            <div class="about_details">
                <p>Google Arts & Culture is a non-commercial initiative. We work with cultural institutions and artists around the world. Together, our mission is to preserve and bring the world’s art and culture online so it’s accessible to anyone, anywhere.</p>
                <p>For any queries and problems, send us a mail at <a href="mailto:fuadreddhow@gmail.com">fuadreddhow@gmail.com</a>.</p>
            </div>
        </section>
    </divmain>
</body>
</html>