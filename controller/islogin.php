<?php

//start the session
session_start();

if(@$_SESSION['islogin']) {

} else {
    header("Location: login/login1.php");
    exit();
}