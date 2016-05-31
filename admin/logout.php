<?php
#start session

session_start();

unset($_SESSION['username']);//Delete the usermane key

//session_destroy();//delete all of the session key

header('Location: login.php'); //Redirect to login.php

?>