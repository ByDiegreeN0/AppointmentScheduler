<?php 

session_start();
session_destroy();

header("location: ../../View/admin/login.html");
?>