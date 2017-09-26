<?php
if($_SESSION['logged']!=2){
    echo "<script> alert('Please log in first') </script>";
 
    header("Location: school-sign-in.php");
}

?>