<?php 
    if(time() - $_SESSION['timestamp'] > 10) { //subtract new timestamp from the old one
        echo"<script>alert('15 Minutes over!');</script>";
        unset($_SESSION['id'], $_SESSION['firstname'], $_SESSION['lastname'], $_SESSION['email'], $_SESSION['mobilenumber'], $_SESSION['token'], $_SESSION['login'], $_SESSION['login']);
        header('Location:  index.php'); //redirect to index.php
        exit;
    } 
    else {
        $_SESSION['timestamp'] = time(); //set new timestamp
    }