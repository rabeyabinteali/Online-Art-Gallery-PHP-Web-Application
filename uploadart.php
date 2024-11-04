<?php
    session_start();
    if (!isset($_SESSION['id'])){
        $id=$_SESSION['id'];
        $msg ='ACCESS DENIED!';
        echo "alert('$msg')" ;
        echo "location.href='login.php'";
    }else{
        include ("connection.php");
        $email=$_SESSION['email'];
        $id=$_SESSION['id'];
        error_reporting(E_ALL);
    }

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="uploadstyle.css">
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
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
        <a href="index.php">Home</a>
        <?php if(isset($_SESSION['id'])){ ?>
        <a href="home.php" >Profile</a>
        <?php } ?>
        <a href="arts.php">Arts</a>
    </div>

    <div class="container">
        <div class="box">
          <span class="borderLine"></span>
          <form method="post" enctype="multipart/form-data" action="upload.php">
            <h2>Upload Art</h2>
            <div class="inputBox" name="title">
              <input type="text" id="title" name="title"/>
              <span>Title</span>
            </div>
            <div class="inputBox" name="category">
              <span>Category</span>
              <select name='Page' >
                  <option value='Duty Roster' >Duty Roster</option>
                  <option value='Training Statistics' >Training Statistics</option>
                  <option value='Soldier Review' >Soldier Review</option>
              </select>
            </div>
            <div class="inputBox" name="tags">
              <input type="text" id="tags" name="tags" />
              <span>Tags</span>
            </div>
            <div class="inputBox" name="description">
              <input type="text" id="description" name="description" />
              <span>Description</span>
            </div>
            <div class="inputBox" name="image">
              <input type="file" id="image" name="image"/>
              <span>Art</span>
            </div>
            <input type="submit" id="btn" value="Upload" name="Login"/>
          </form>
        </div>
        <?php 
        ?>
      </div>
  
</body>
</html>