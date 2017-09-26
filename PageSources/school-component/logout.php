<?php 
session_start();
session_destroy();

header("Location: school-sign-in.php");


?>