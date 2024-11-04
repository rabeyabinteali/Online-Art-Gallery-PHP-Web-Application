<?php
        session_start();
        include ("connection.php");
        if(!isset($_GET['imgid'])){
                $msg ='ACCESS DENIED!';
                echo "<script>alert('$msg');" ;
                echo "location.href='arts.php'</script>";
        }
        $imgID=$_GET['imgid'];

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="view.css">
    <link rel="stylesheet" type="text/css" href="gallery.css">
    <link rel="icon" href="img/logo.png">
    <title> Online Art Gallery</title>
    <script src="https://kit.fontawesome.com/d989eee63d.js" crossorigin="anonymous"></script>
</head>
<body >
        <div class="header">
                <img src="img/logo.png" onclick="location.href='home.php'">
                <form action="arts.php" method="post"><input type="text" name="searchTopic" placeholder="Search For Anything">
                <input type="submit" value="Search">
                </form>
                <?php if(!isset($_SESSION['id'])){ ?>
                <a href="login.php" >Log In</a>
                <?php }else{ ?>
                <a href="Logout.php" style="font-size: 15px;"><i class="fas fa-user"><text style="font-size:10px"><br>Log<br>Out</i></a></text>
                <?php } ?>
                <a href="aboutus.php">About</a>
                <a href="gallery.php">Gallery</a>
                <a href="index.php">Home</a>
                <a href="arts.php">Arts</a>
        </div> 
        <div class="images">
                <div class="image-container">
                <?php 
                $sql = "SELECT * from arts WHERE ID='$imgID';";  
                $result = $con->query($sql);
                $row = $result->fetch_assoc()
                ?>  
                <div class="" 
                <img src=<?php echo "img/".$row['img_path']; ?>>       
                    <text><?php echo $row["Title"]."   <text style=' color: rgb(208, 99, 10);; font-size:10px;'>".$row['CreationDate']."</text>";?></text> 
                </div>
        </div>
</body>