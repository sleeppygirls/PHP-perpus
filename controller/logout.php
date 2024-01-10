<?php
//start the session
session_start();

//destory the session
session_destroy();

header("Location: ../login/login1.php");