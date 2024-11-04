<?php
session_start();
include('connection.php');
if(isset($_POST['SignUp'])){
        $email = $_POST['email'];  
        $password = $_POST['password']; 
        $bio = $_POST['bio']; 
        $name = $_POST['name']; 
        $sql="INSERT into users (NAME,EMAIL,BIO) VALUES('$name','$email','$bio');";
        if($con->query($sql)==True){  
            echo "yay";
        
        }else{  
           echo "Nya";
        }    
    } 
?>  