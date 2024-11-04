<?php
    session_start();
    if (!isset($_SESSION['id'])){
        $msg ='ACCESS DENIED!';
        echo "<script>alert('$msg');" ;
        echo "location.href='login.php'</script>";
    }else{
        include ("connection.php");
        $email=$_SESSION['email'];
        $id=$_SESSION['id'];
    }
    error_reporting(E_ALL);

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="home.css">
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
        <a href="Logout.php" style="font-size: 15px;"><i class="fas fa-user"><text style="font-size:10px"><br>Log<br>Out</i></a></text>
        <a href="aboutus.php">About</a>
        <a href="gallery.php">Gallery</a>
        <a href="index.php">Home</a>
        <a href="arts.php">Arts</a>
    </div> 
    <div class="main-body">
        <div class="artist-section">
            <table>
                <tr>
                    <td>
                    <img src = "artist/<?php  
                    $sql="SELECT * from users where ID='$id' and EMAIL='$email'";
                    $result = mysqli_query($con, $sql);  
                    $count = mysqli_num_rows($result);  
                    if($count==1){
                    $row=$result->fetch_assoc();
                    echo "".$row["img_path"];
                    }else{
                        echo "error occured in fetching user image";
                    }
                ?>">
                    <h4> <?php echo $row['NAME'];?> </h4>
                    </td>
                    <td> 
                        <?php if($count==1){echo $row["BIO"];}?> 
                        <br>
                        <br>
                        <i class="fas fa-upload" onclick="location.href='uploadart.php'"><text style="font-size:10px;">Upload</text></i>
                    </td>
                </tr>
            </table>
        </div>
        <div class="tablediv">
        <div class="image-card-container">
        <?php $sql = "SELECT * from arts;";  
							$result = $con->query($sql);
							$attr=0;   
							while($row = $result->fetch_assoc()){
                            if($attr%4==0) {echo "<div class='trow'>";}
		?>
                <div class="image-card">
                    <div class="image" onclick="location.href='view.php?imgid=<?php echo $row['ID'];?>'">    
                        <img src=<?php echo "img/".$row['img_path']; ?>>       
                    </div>
                    <text><?php echo $row["Title"]."   <text style=' color: rgb(208, 99, 10);; font-size:10px;'>".$row['CreationDate']."</text>";?></text> 
                </div>
                <?php if($attr%4==3) {echo "</div>";} $attr++;} ?>
        </div>
        </div>
           
    </div>
</body>
</html>