<?php
    include('config/db.php');
    $message ="";
    $message_success="";
    if(isset($_GET['key']) && isset($_GET['email'])) {
        $key=$_GET['key'];
        $email=$_GET['email'];
        $check=mysqli_query($connection,"SELECT * FROM forget_password WHERE email='$email' and temp_key='$key'");
        //if key doesnt matches
        if (mysqli_num_rows($check)!=1) {
            header('location: usedverification.php');
        exit;
        }
    }
    else{
    header('location:index.php');
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $password1=mysqli_real_escape_string($connection,$_POST['password1']);
            $password2=mysqli_real_escape_string($connection,$_POST['password2']);
            if ($password2==$password1) {
                $message_success="New password has been set for ".$email;
                $password_hash= password_hash($password1, PASSWORD_BCRYPT);
                //destroy the key from table
                mysqli_query($connection,"DELETE FROM forget_password where email='$email' and temp_key='$key'");
                //update password in database
                mysqli_query($connection,"UPDATE users set password='$password_hash' where email='$email'");
                header('location:index.php');
            }
            else{
                $message='<div class="alert alert-danger">Your Passwords dont match </div>';
            }
    }
            