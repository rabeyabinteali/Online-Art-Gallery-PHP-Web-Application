<?php 
    session_start();
    if (!isset($_SESSION['id'])){
        $msg ='ACCESS DENIED!';
        echo "<script>alert('$msg'); location.href='login.php'</script>";
        //header("location: login.php");
    }else{
        include ("connection.php");
        $email=$_SESSION['email'];
        $id=$_SESSION['id'];
    }
    error_reporting(E_ALL); 
?>
<html>
    <?php
    if(isset($_POST['title']) && !empty($_POST['title'])){
            $title=$_POST['title'];
            $category=$_POST['$category'];
            $tags=$_POST['tags'];
            $dt=date("Y/m/d");
            $file_name= $_FILES['image']['name'];
            $temp_name= $_FILES['image']['name'];
            $imgpath='img/'.$file_name;
            $sql="INSERT INTO arts(CreatorID, Category, CreationDate,img_path,Title,Tags,Description)
                            VALUES('$id','$category','$dt','$imgpath','$title','$tags','$Description');";
            if ($conn->query($sql) === TRUE) {
                echo "<script>Record updated successfully</script>";
            } else {
                echo "<script>Record update failed</script>";
            }
    }
?>
</html>