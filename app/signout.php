<?php

require_once 'header.php';

// destroy the session
session_destroy();

header("Location: /Sussex/app/login.php"); 

exit();

?>