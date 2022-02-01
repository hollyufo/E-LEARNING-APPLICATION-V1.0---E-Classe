<?php
    include('db.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT * from users where email = '$username' and password = '$hashed_password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location: index.php');  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }    