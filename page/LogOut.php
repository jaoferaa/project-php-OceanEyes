<?php
session_start();
$_SESSION['auth'];
session_destroy();
header('location:./Login.php');