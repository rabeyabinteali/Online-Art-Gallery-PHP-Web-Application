<?php
session_start();
include('connection.php');
if(isset($_POST['Login'])){
    $email = $_POST['email'];  
    $password = $_POST['password'];  
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
        $sql = "SELECT *from users,security where users.EMAIL = '$email' and security.PASSWORD = '$password'";  
        if(preg_match("/^[a-zA-Z0-9._%+-]+@onlineartgallery.org$/",$email)){
            $sql="SELECT *from admin WHERE EMAIL = '$email' and password = '$password'";
            $result = mysqli_query($con, $sql);  
            $count = mysqli_num_rows($result);  
            if($count == 1){  
               $row=$result->fetch_assoc();
               $_SESSION['id']=$row['ID'];
               header("location: admin_info.php");

            }else{  
                $msg ='Incorrect Credentials!';
                echo "<script>alert('$msg'); location.href='login.php'</script>";
            }    
        }else{
            $result = mysqli_query($con, $sql);  
            $count = mysqli_num_rows($result);  
            
            if($count == 1){  
            $row=$result->fetch_assoc();
            $_SESSION['id']=$row['ID'];
            $_SESSION['email']=$row['EMAIL'];
            header("location: home.php");
            }else{  
                $msg ='Incorrect Credentials!';
                echo "<script>alert('$msg'); location.href='login.php'</script>";
            }   
        } 
    } 
?>  