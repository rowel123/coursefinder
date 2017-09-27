<?php 
session_start();

$con=mysqli_connect("localhost","root","","coursefinderdb");

$sql = "DELETE FROM tbl_courses
WHERE school_id ='$_GET[id]'";

$sql2 = "DELETE FROM tbl_schools
WHERE school_id ='$_GET[id]'";



   if (mysqli_query($con, $sql)) {
    header("location: school-index.php#section");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


  if (mysqli_query($con, $sql2)) {
    header("location: school-index.php#section");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


?>