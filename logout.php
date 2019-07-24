<?php
session_start();
session_destroy();
header('location:http://localhost/mypr/login1.php');
?>