<?php

include '../db/config.php';

session_start();
session_unset();
session_destroy();

header('location:/login-register-php/login.php');

?>